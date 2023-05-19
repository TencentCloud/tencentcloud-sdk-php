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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部署记录信息
 *
 * @method integer getId() 获取部署记录ID
 * @method void setId(integer $Id) 设置部署记录ID
 * @method string getCertId() 获取部署证书ID
 * @method void setCertId(string $CertId) 设置部署证书ID
 * @method string getResourceType() 获取部署资源类型
 * @method void setResourceType(string $ResourceType) 设置部署资源类型
 * @method string getRegion() 获取部署地域
 * @method void setRegion(string $Region) 设置部署地域
 * @method integer getStatus() 获取部署状态
 * @method void setStatus(integer $Status) 设置部署状态
 * @method string getCreateTime() 获取部署时间
 * @method void setCreateTime(string $CreateTime) 设置部署时间
 * @method string getUpdateTime() 获取最近一次更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置最近一次更新时间
 */
class DeployRecordInfo extends AbstractModel
{
    /**
     * @var integer 部署记录ID
     */
    public $Id;

    /**
     * @var string 部署证书ID
     */
    public $CertId;

    /**
     * @var string 部署资源类型
     */
    public $ResourceType;

    /**
     * @var string 部署地域
     */
    public $Region;

    /**
     * @var integer 部署状态
     */
    public $Status;

    /**
     * @var string 部署时间
     */
    public $CreateTime;

    /**
     * @var string 最近一次更新时间
     */
    public $UpdateTime;

    /**
     * @param integer $Id 部署记录ID
     * @param string $CertId 部署证书ID
     * @param string $ResourceType 部署资源类型
     * @param string $Region 部署地域
     * @param integer $Status 部署状态
     * @param string $CreateTime 部署时间
     * @param string $UpdateTime 最近一次更新时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
