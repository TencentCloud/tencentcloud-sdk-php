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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfsFileSystems请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统 ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID
 * @method string getVpcId() 获取私有网络（VPC） ID
 * @method void setVpcId(string $VpcId) 设置私有网络（VPC） ID
 * @method string getSubnetId() 获取子网 ID
 * @method void setSubnetId(string $SubnetId) 设置子网 ID
 * @method integer getOffset() 获取Offset 分页码,默认0
 * @method void setOffset(integer $Offset) 设置Offset 分页码,默认0
 * @method integer getLimit() 获取Limit 页面大小，默认10
 * @method void setLimit(integer $Limit) 设置Limit 页面大小，默认10
 * @method string getCreationToken() 获取用户自定义名称
 * @method void setCreationToken(string $CreationToken) 设置用户自定义名称
 */
class DescribeCfsFileSystemsRequest extends AbstractModel
{
    /**
     * @var string 文件系统 ID
     */
    public $FileSystemId;

    /**
     * @var string 私有网络（VPC） ID
     */
    public $VpcId;

    /**
     * @var string 子网 ID
     */
    public $SubnetId;

    /**
     * @var integer Offset 分页码,默认0
     */
    public $Offset;

    /**
     * @var integer Limit 页面大小，默认10
     */
    public $Limit;

    /**
     * @var string 用户自定义名称
     */
    public $CreationToken;

    /**
     * @param string $FileSystemId 文件系统 ID
     * @param string $VpcId 私有网络（VPC） ID
     * @param string $SubnetId 子网 ID
     * @param integer $Offset Offset 分页码,默认0
     * @param integer $Limit Limit 页面大小，默认10
     * @param string $CreationToken 用户自定义名称
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CreationToken",$param) and $param["CreationToken"] !== null) {
            $this->CreationToken = $param["CreationToken"];
        }
    }
}
