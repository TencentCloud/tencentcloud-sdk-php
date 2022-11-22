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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 快照信息
 *
 * @method string getCosUrl() 获取快照的对象存储地址
 * @method void setCosUrl(string $CosUrl) 设置快照的对象存储地址
 * @method string getCreatedOn() 获取添加时间
 * @method void setCreatedOn(string $CreatedOn) 设置添加时间
 * @method string getDomain() 获取所属域名
 * @method void setDomain(string $Domain) 设置所属域名
 * @method string getId() 获取快照记录 ID
 * @method void setId(string $Id) 设置快照记录 ID
 * @method string getRecordCount() 获取域名解析记录数
 * @method void setRecordCount(string $RecordCount) 设置域名解析记录数
 * @method string getStatus() 获取状态：normal-正常，create-备份中
 * @method void setStatus(string $Status) 设置状态：normal-正常，create-备份中
 */
class SnapshotInfo extends AbstractModel
{
    /**
     * @var string 快照的对象存储地址
     */
    public $CosUrl;

    /**
     * @var string 添加时间
     */
    public $CreatedOn;

    /**
     * @var string 所属域名
     */
    public $Domain;

    /**
     * @var string 快照记录 ID
     */
    public $Id;

    /**
     * @var string 域名解析记录数
     */
    public $RecordCount;

    /**
     * @var string 状态：normal-正常，create-备份中
     */
    public $Status;

    /**
     * @param string $CosUrl 快照的对象存储地址
     * @param string $CreatedOn 添加时间
     * @param string $Domain 所属域名
     * @param string $Id 快照记录 ID
     * @param string $RecordCount 域名解析记录数
     * @param string $Status 状态：normal-正常，create-备份中
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
        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
