<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentAppServices请求参数结构体
 *
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method integer getLimit() 获取<p>数据量</p>
 * @method void setLimit(integer $Limit) 设置<p>数据量</p>
 * @method array getIDs() 获取<p>IDs</p>
 * @method void setIDs(array $IDs) 设置<p>IDs</p>
 * @method array getAgentAppIDs() 获取<p>应用IDs</p>
 * @method void setAgentAppIDs(array $AgentAppIDs) 设置<p>应用IDs</p>
 * @method array getServiceIDs() 获取<p>服务IDs</p>
 * @method void setServiceIDs(array $ServiceIDs) 设置<p>服务IDs</p>
 * @method string getKeyword() 获取<p>关键字</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键字</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method boolean getAgentCredentialExist() 获取<p>是否有凭据</p>
 * @method void setAgentCredentialExist(boolean $AgentCredentialExist) 设置<p>是否有凭据</p>
 * @method array getAgentCredentialIDs() 获取<p>凭据ID</p>
 * @method void setAgentCredentialIDs(array $AgentCredentialIDs) 设置<p>凭据ID</p>
 */
class DescribeAgentAppServicesRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceID;

    /**
     * @var integer <p>数据量</p>
     */
    public $Limit;

    /**
     * @var array <p>IDs</p>
     */
    public $IDs;

    /**
     * @var array <p>应用IDs</p>
     */
    public $AgentAppIDs;

    /**
     * @var array <p>服务IDs</p>
     */
    public $ServiceIDs;

    /**
     * @var string <p>关键字</p>
     */
    public $Keyword;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var boolean <p>是否有凭据</p>
     */
    public $AgentCredentialExist;

    /**
     * @var array <p>凭据ID</p>
     */
    public $AgentCredentialIDs;

    /**
     * @param string $InstanceID <p>实例ID</p>
     * @param integer $Limit <p>数据量</p>
     * @param array $IDs <p>IDs</p>
     * @param array $AgentAppIDs <p>应用IDs</p>
     * @param array $ServiceIDs <p>服务IDs</p>
     * @param string $Keyword <p>关键字</p>
     * @param integer $Offset <p>偏移量</p>
     * @param boolean $AgentCredentialExist <p>是否有凭据</p>
     * @param array $AgentCredentialIDs <p>凭据ID</p>
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("IDs",$param) and $param["IDs"] !== null) {
            $this->IDs = $param["IDs"];
        }

        if (array_key_exists("AgentAppIDs",$param) and $param["AgentAppIDs"] !== null) {
            $this->AgentAppIDs = $param["AgentAppIDs"];
        }

        if (array_key_exists("ServiceIDs",$param) and $param["ServiceIDs"] !== null) {
            $this->ServiceIDs = $param["ServiceIDs"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("AgentCredentialExist",$param) and $param["AgentCredentialExist"] !== null) {
            $this->AgentCredentialExist = $param["AgentCredentialExist"];
        }

        if (array_key_exists("AgentCredentialIDs",$param) and $param["AgentCredentialIDs"] !== null) {
            $this->AgentCredentialIDs = $param["AgentCredentialIDs"];
        }
    }
}
