<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AWS S3 文件是上传触发器。
 *
 * @method string getS3Bucket() 获取绑定的 AWS S3 存储桶。
 * @method void setS3Bucket(string $S3Bucket) 设置绑定的 AWS S3 存储桶。
 * @method string getS3Region() 获取绑定的桶所在 AWS 区域，目前支持：  
us-east-1  
eu-west-3
 * @method void setS3Region(string $S3Region) 设置绑定的桶所在 AWS 区域，目前支持：  
us-east-1  
eu-west-3
 * @method string getDir() 获取绑定的输入路径目录，必须为绝对路径，即以 `/` 开头和结尾。如`/movie/201907/`，不填代表根目录`/`。	
 * @method void setDir(string $Dir) 设置绑定的输入路径目录，必须为绝对路径，即以 `/` 开头和结尾。如`/movie/201907/`，不填代表根目录`/`。	
 * @method array getFormats() 获取允许触发的文件格式列表，如 ["mp4", "flv", "mov"]。不填代表所有格式的文件都可以触发工作流。	
 * @method void setFormats(array $Formats) 设置允许触发的文件格式列表，如 ["mp4", "flv", "mov"]。不填代表所有格式的文件都可以触发工作流。	
 * @method string getS3SecretId() 获取绑定的 AWS S3 存储桶的秘钥ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setS3SecretId(string $S3SecretId) 设置绑定的 AWS S3 存储桶的秘钥ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getS3SecretKey() 获取绑定的 AWS S3 存储桶的秘钥Key。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setS3SecretKey(string $S3SecretKey) 设置绑定的 AWS S3 存储桶的秘钥Key。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AwsSQS getAwsSQS() 获取绑定的 AWS S3 存储桶对应的 SQS事件队列。
注意：队列和桶需要在同一区域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAwsSQS(AwsSQS $AwsSQS) 设置绑定的 AWS S3 存储桶对应的 SQS事件队列。
注意：队列和桶需要在同一区域。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AwsS3FileUploadTrigger extends AbstractModel
{
    /**
     * @var string 绑定的 AWS S3 存储桶。
     */
    public $S3Bucket;

    /**
     * @var string 绑定的桶所在 AWS 区域，目前支持：  
us-east-1  
eu-west-3
     */
    public $S3Region;

    /**
     * @var string 绑定的输入路径目录，必须为绝对路径，即以 `/` 开头和结尾。如`/movie/201907/`，不填代表根目录`/`。	
     */
    public $Dir;

    /**
     * @var array 允许触发的文件格式列表，如 ["mp4", "flv", "mov"]。不填代表所有格式的文件都可以触发工作流。	
     */
    public $Formats;

    /**
     * @var string 绑定的 AWS S3 存储桶的秘钥ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $S3SecretId;

    /**
     * @var string 绑定的 AWS S3 存储桶的秘钥Key。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $S3SecretKey;

    /**
     * @var AwsSQS 绑定的 AWS S3 存储桶对应的 SQS事件队列。
注意：队列和桶需要在同一区域。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AwsSQS;

    /**
     * @param string $S3Bucket 绑定的 AWS S3 存储桶。
     * @param string $S3Region 绑定的桶所在 AWS 区域，目前支持：  
us-east-1  
eu-west-3
     * @param string $Dir 绑定的输入路径目录，必须为绝对路径，即以 `/` 开头和结尾。如`/movie/201907/`，不填代表根目录`/`。	
     * @param array $Formats 允许触发的文件格式列表，如 ["mp4", "flv", "mov"]。不填代表所有格式的文件都可以触发工作流。	
     * @param string $S3SecretId 绑定的 AWS S3 存储桶的秘钥ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $S3SecretKey 绑定的 AWS S3 存储桶的秘钥Key。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AwsSQS $AwsSQS 绑定的 AWS S3 存储桶对应的 SQS事件队列。
注意：队列和桶需要在同一区域。
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("S3Bucket",$param) and $param["S3Bucket"] !== null) {
            $this->S3Bucket = $param["S3Bucket"];
        }

        if (array_key_exists("S3Region",$param) and $param["S3Region"] !== null) {
            $this->S3Region = $param["S3Region"];
        }

        if (array_key_exists("Dir",$param) and $param["Dir"] !== null) {
            $this->Dir = $param["Dir"];
        }

        if (array_key_exists("Formats",$param) and $param["Formats"] !== null) {
            $this->Formats = $param["Formats"];
        }

        if (array_key_exists("S3SecretId",$param) and $param["S3SecretId"] !== null) {
            $this->S3SecretId = $param["S3SecretId"];
        }

        if (array_key_exists("S3SecretKey",$param) and $param["S3SecretKey"] !== null) {
            $this->S3SecretKey = $param["S3SecretKey"];
        }

        if (array_key_exists("AwsSQS",$param) and $param["AwsSQS"] !== null) {
            $this->AwsSQS = new AwsSQS();
            $this->AwsSQS->deserialize($param["AwsSQS"]);
        }
    }
}
