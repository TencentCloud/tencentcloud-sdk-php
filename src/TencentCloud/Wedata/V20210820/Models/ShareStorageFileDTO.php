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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务需求中，存在临时文件上传和下载，上传文件需要先获取上传必要的信息，如访问秘钥、文件上传到什么位置等，文件下载时也需要知道文件在什么地方下载，下载访问秘钥等，请注意，如果是公有云，共享存储为 COS，如果是私有云，共享存储为 CSP
 *
 * @method string getToken() 获取共享存储访问 Token，公有云里面为 Cos 访问 Token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToken(string $Token) 设置共享存储访问 Token，公有云里面为 Cos 访问 Token
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretId() 获取共享存储访问 SecretId，公有云里面为 Cos 访问 SecretId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretId(string $SecretId) 设置共享存储访问 SecretId，公有云里面为 Cos 访问 SecretId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretKey() 获取共享存储访问 SecretKey，公有云里面为 Cos 访问 SecretKey
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置共享存储访问 SecretKey，公有云里面为 Cos 访问 SecretKey
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTokenExpiredTime() 获取Token 过期时间，时间戳类型，精确到秒，如果是 -1 则表示没有过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenExpiredTime(integer $TokenExpiredTime) 设置Token 过期时间，时间戳类型，精确到秒，如果是 -1 则表示没有过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTokenCreateTime() 获取Token 创建时间，时间戳类型，精确到秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenCreateTime(integer $TokenCreateTime) 设置Token 创建时间，时间戳类型，精确到秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShareStorageType() 获取共享存储类型，公有云为 COS，私有化为 CSP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShareStorageType(string $ShareStorageType) 设置共享存储类型，公有云为 COS，私有化为 CSP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShareStorageEndPoint() 获取共享存储 EndPoint，公有云可以不使用该值，私有化需要使用该值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShareStorageEndPoint(string $ShareStorageEndPoint) 设置共享存储 EndPoint，公有云可以不使用该值，私有化需要使用该值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketRegion() 获取存储桶 Region
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketRegion(string $BucketRegion) 设置存储桶 Region
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketName() 获取存储桶名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketName(string $BucketName) 设置存储桶名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileMappings() 获取文件映射，导入文件时，可能会存在文件名冲突，WeData 后端会自动校验，如果出现冲突，会基于传入的名称生成新的名称，文件上传到共享存储时请使用新生成的文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMappings(array $FileMappings) 设置文件映射，导入文件时，可能会存在文件名冲突，WeData 后端会自动校验，如果出现冲突，会基于传入的名称生成新的名称，文件上传到共享存储时请使用新生成的文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileExpireTime() 获取文件过期时间，公有云中，默认的过期时间为 15 天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileExpireTime(integer $FileExpireTime) 设置文件过期时间，公有云中，默认的过期时间为 15 天
注意：此字段可能返回 null，表示取不到有效值。
 */
class ShareStorageFileDTO extends AbstractModel
{
    /**
     * @var string 共享存储访问 Token，公有云里面为 Cos 访问 Token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Token;

    /**
     * @var string 共享存储访问 SecretId，公有云里面为 Cos 访问 SecretId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretId;

    /**
     * @var string 共享存储访问 SecretKey，公有云里面为 Cos 访问 SecretKey
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @var integer Token 过期时间，时间戳类型，精确到秒，如果是 -1 则表示没有过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenExpiredTime;

    /**
     * @var integer Token 创建时间，时间戳类型，精确到秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenCreateTime;

    /**
     * @var string 共享存储类型，公有云为 COS，私有化为 CSP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShareStorageType;

    /**
     * @var string 共享存储 EndPoint，公有云可以不使用该值，私有化需要使用该值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShareStorageEndPoint;

    /**
     * @var string 存储桶 Region
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketRegion;

    /**
     * @var string 存储桶名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketName;

    /**
     * @var array 文件映射，导入文件时，可能会存在文件名冲突，WeData 后端会自动校验，如果出现冲突，会基于传入的名称生成新的名称，文件上传到共享存储时请使用新生成的文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMappings;

    /**
     * @var integer 文件过期时间，公有云中，默认的过期时间为 15 天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileExpireTime;

    /**
     * @param string $Token 共享存储访问 Token，公有云里面为 Cos 访问 Token
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretId 共享存储访问 SecretId，公有云里面为 Cos 访问 SecretId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretKey 共享存储访问 SecretKey，公有云里面为 Cos 访问 SecretKey
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TokenExpiredTime Token 过期时间，时间戳类型，精确到秒，如果是 -1 则表示没有过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TokenCreateTime Token 创建时间，时间戳类型，精确到秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShareStorageType 共享存储类型，公有云为 COS，私有化为 CSP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShareStorageEndPoint 共享存储 EndPoint，公有云可以不使用该值，私有化需要使用该值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketRegion 存储桶 Region
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketName 存储桶名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileMappings 文件映射，导入文件时，可能会存在文件名冲突，WeData 后端会自动校验，如果出现冲突，会基于传入的名称生成新的名称，文件上传到共享存储时请使用新生成的文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileExpireTime 文件过期时间，公有云中，默认的过期时间为 15 天
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
        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("TokenExpiredTime",$param) and $param["TokenExpiredTime"] !== null) {
            $this->TokenExpiredTime = $param["TokenExpiredTime"];
        }

        if (array_key_exists("TokenCreateTime",$param) and $param["TokenCreateTime"] !== null) {
            $this->TokenCreateTime = $param["TokenCreateTime"];
        }

        if (array_key_exists("ShareStorageType",$param) and $param["ShareStorageType"] !== null) {
            $this->ShareStorageType = $param["ShareStorageType"];
        }

        if (array_key_exists("ShareStorageEndPoint",$param) and $param["ShareStorageEndPoint"] !== null) {
            $this->ShareStorageEndPoint = $param["ShareStorageEndPoint"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("FileMappings",$param) and $param["FileMappings"] !== null) {
            $this->FileMappings = [];
            foreach ($param["FileMappings"] as $key => $value){
                $obj = new ShareStorageFileMappingDTO();
                $obj->deserialize($value);
                array_push($this->FileMappings, $obj);
            }
        }

        if (array_key_exists("FileExpireTime",$param) and $param["FileExpireTime"] !== null) {
            $this->FileExpireTime = $param["FileExpireTime"];
        }
    }
}
