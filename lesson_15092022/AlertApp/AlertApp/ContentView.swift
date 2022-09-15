//
//  ContentView.swift
//  AlertApp
//
//  Created by Student on 15/9/2022.
//

import SwiftUI

struct ContentView: View {
    @State private var showBasicAlert = false
    @State private var showMultilineAlert = false
    var body: some View {
        VStack{
            Button(action:{
                self.showBasicAlert = true
            }){
                Text("Hello, world!")
            }
            .padding(.all, 17.0)
            .alert(isPresented: $showBasicAlert){
                return Alert(title:Text("Hello World"))
            }
            Button(action:{
                self.showMultilineAlert = true
            }){
                Text("Multi-line alert")
            }
            .padding(.all, 17.0)
            .alert(isPresented: $showMultilineAlert){
                return Alert(title: Text("Greeting"),message:
                Text("Welcome to our learning place"))
            }
        }
    }
}
