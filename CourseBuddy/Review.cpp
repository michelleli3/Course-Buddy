//
//  Review.cpp
//  CourseBuddy
//
//  Created by Jake Byman on 11/15/15.
//  Copyright © 2015 Jake Byman. All rights reserved.
//

#include <stdio.h>
#include "Review.h"

Review :: Review(string n, float easy, float useful, float amount){
    name = n;
    easiness = easy;
    usefulness = useful;
    amountOfWork = amount;
    overallRating = 0.333*easiness + 0.333*usefulness + 0.333*amountOfWork;
}

string Review :: getName(){
    return name;
}

float Review :: getOverallRating(){
    return overallRating;
}

float Review :: getEasiness(){
    return easiness;
}

float Review :: getUsefulness(){
    return usefulness;
}

float Review :: getAmountOfWork(){
    return amountOfWork;
}