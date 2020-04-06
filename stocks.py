# stocks.py
# Gets stock data

import os, time

def main():
    # Write PID to file
    with open("PID_stocks.txt", 'w') as pf:
        pf.write(str(os.getpid()))

    symbolList = []

    while True:
        # Read stocklist
        with open('watchlist.txt', 'r') as w:
            symbolList = w.read().split()

        # Update each stock price in watchlist
        for symbol in symbolList:
            command_getHTML = "wget -q -O " + symbol + ".html_content https://finance.yahoo.com/quote/" + symbol
            os.system(command_getHTML)
            #print(command_getHTML)

            grep1 = r"<span class=\"Trsdu(0.3s) Fw(b) Fz(36px) Mb(-4px) D(ib)\" data-reactid=\"50\">[0-9]*\,\?[0-9]*\,\?[0-9]*\.[0-9][0-9]"
            grep2 = r"[0-9]*\,\?[0-9]*\,\?[0-9]*\.[0-9][0-9]"
            command_getPrice = "cat " + symbol + ".html_content | grep -o \"" + grep1 + "\" | grep -o \"" + grep2 + "\" > " + symbol + ".price"
            os.system(command_getPrice)
            #print(command_getPrice)

        # Update webpage and delete all generated data
        os.system("php index.php > h.html")
        os.system("sudo cp h.html /var/www/html/Stocks/index.html")
        #os.system("rm *.html_content *.price")
        time.sleep(2)


if __name__ == '__main__':
    main()

