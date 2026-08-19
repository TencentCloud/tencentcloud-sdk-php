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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组策略
 *
 * @method string getPort() 获取<p>端口</p>
 * @method void setPort(string $Port) 设置<p>端口</p>
 * @method string getAction() 获取<p>策略</p>
 * @method void setAction(string $Action) 设置<p>策略</p>
 * @method string getProtocol() 获取<p>协议</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议</p>
 * @method string getCidrBlock() 获取<p>访问源</p>
 * @method void setCidrBlock(string $CidrBlock) 设置<p>访问源</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method integer getPriority() 获取<p>优先级</p><p>单位：1</p>
 * @method void setPriority(integer $Priority) 设置<p>优先级</p><p>单位：1</p>
 */
class SecurityGroupPolicyItem extends AbstractModel
{
    /**
     * @var string <p>端口</p>
     */
    public $Port;

    /**
     * @var string <p>策略</p>
     */
    public $Action;

    /**
     * @var string <p>协议</p>
     */
    public $Protocol;

    /**
     * @var string <p>访问源</p>
     */
    public $CidrBlock;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>优先级</p><p>单位：1</p>
     */
    public $Priority;

    /**
     * @param string $Port <p>端口</p>
     * @param string $Action <p>策略</p>
     * @param string $Protocol <p>协议</p>
     * @param string $CidrBlock <p>访问源</p>
     * @param string $Description <p>描述</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param integer $Priority <p>优先级</p><p>单位：1</p>
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
