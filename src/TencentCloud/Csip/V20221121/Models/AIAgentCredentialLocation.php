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
 * AIAgent 资产凭证位置
 *
 * @method string getInstanceID() 获取<p>实例 ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例 ID</p>
 * @method string getContainerID() 获取<p>容器 ID</p>
 * @method void setContainerID(string $ContainerID) 设置<p>容器 ID</p>
 * @method string getPath() 获取<p>凭据所在路径</p>
 * @method void setPath(string $Path) 设置<p>凭据所在路径</p>
 * @method integer getLine() 获取<p>凭据所在行号</p>
 * @method void setLine(integer $Line) 设置<p>凭据所在行号</p>
 * @method string getContent() 获取<p>凭据脱敏片段</p>
 * @method void setContent(string $Content) 设置<p>凭据脱敏片段</p>
 * @method integer getStatus() 获取<p>凭据是否托管</p><p>枚举值：</p><ul><li>1： 托管</li><li>0： 未托管</li></ul>
 * @method void setStatus(integer $Status) 设置<p>凭据是否托管</p><p>枚举值：</p><ul><li>1： 托管</li><li>0： 未托管</li></ul>
 * @method integer getDelegateID() 获取<p>凭据托管 ID</p>
 * @method void setDelegateID(integer $DelegateID) 设置<p>凭据托管 ID</p>
 */
class AIAgentCredentialLocation extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>容器 ID</p>
     */
    public $ContainerID;

    /**
     * @var string <p>凭据所在路径</p>
     */
    public $Path;

    /**
     * @var integer <p>凭据所在行号</p>
     */
    public $Line;

    /**
     * @var string <p>凭据脱敏片段</p>
     */
    public $Content;

    /**
     * @var integer <p>凭据是否托管</p><p>枚举值：</p><ul><li>1： 托管</li><li>0： 未托管</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>凭据托管 ID</p>
     */
    public $DelegateID;

    /**
     * @param string $InstanceID <p>实例 ID</p>
     * @param string $ContainerID <p>容器 ID</p>
     * @param string $Path <p>凭据所在路径</p>
     * @param integer $Line <p>凭据所在行号</p>
     * @param string $Content <p>凭据脱敏片段</p>
     * @param integer $Status <p>凭据是否托管</p><p>枚举值：</p><ul><li>1： 托管</li><li>0： 未托管</li></ul>
     * @param integer $DelegateID <p>凭据托管 ID</p>
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

        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DelegateID",$param) and $param["DelegateID"] !== null) {
            $this->DelegateID = $param["DelegateID"];
        }
    }
}
