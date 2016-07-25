package com.logoocc.mongo;

import org.bson.Document;

import com.mongodb.MongoClient;
import com.mongodb.client.MongoCollection;
import com.mongodb.client.MongoDatabase;

public class Find {

	public static void main(String args[]) {
		try {
			// 连接到 mongodb 服务
			MongoClient mongoClient = new MongoClient("localhost", 27017);

			// 连接到数据库
			MongoDatabase mongoDatabase = mongoClient.getDatabase("mycol");
			System.out.println("Connect to database successfully");

			MongoCollection<Document> collection = mongoDatabase.getCollection("test");
			System.out.println("集合 test 选择成功");
		} catch (Exception e) {
			System.err.println(e.getClass().getName() + ": " + e.getMessage());
		}
	}

}
