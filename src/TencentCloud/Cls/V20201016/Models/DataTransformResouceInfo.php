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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据加工的资源信息
 *
 * @method string getTopicId() 获取<p>日志主题ID</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题ID</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
 * @method string getAlias() 获取<p>别名<br>限制：不能包含字符 |。</p>
 * @method void setAlias(string $Alias) 设置<p>别名<br>限制：不能包含字符 |。</p>
 * @method boolean getIsCrossAccount() 获取<p>是否是跨账号主题，false不是跨账号主题，true是跨账号主题</p><p>默认值：false</p>
 * @method void setIsCrossAccount(boolean $IsCrossAccount) 设置<p>是否是跨账号主题，false不是跨账号主题，true是跨账号主题</p><p>默认值：false</p>
 * @method string getRoleARN() 获取<p>跨账号场景下，被投递账号给投递账号创建的角色ARN值，在被投递账号的角色里查找</p>
 * @method void setRoleARN(string $RoleARN) 设置<p>跨账号场景下，被投递账号给投递账号创建的角色ARN值，在被投递账号的角色里查找</p>
 * @method string getExternalId() 获取<p>外部ID值，可以在被投递账号的角色-载体里找到该值</p>
 * @method void setExternalId(string $ExternalId) 设置<p>外部ID值，可以在被投递账号的角色-载体里找到该值</p>
 * @method string getTopicName() 获取<p>topic名称</p>
 * @method void setTopicName(string $TopicName) 设置<p>topic名称</p>
 * @method string getLogsetName() 获取<p>日志集的名称</p>
 * @method void setLogsetName(string $LogsetName) 设置<p>日志集的名称</p>
 */
class DataTransformResouceInfo extends AbstractModel
{
    /**
     * @var string <p>日志主题ID</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
     */
    public $TopicId;

    /**
     * @var string <p>别名<br>限制：不能包含字符 |。</p>
     */
    public $Alias;

    /**
     * @var boolean <p>是否是跨账号主题，false不是跨账号主题，true是跨账号主题</p><p>默认值：false</p>
     */
    public $IsCrossAccount;

    /**
     * @var string <p>跨账号场景下，被投递账号给投递账号创建的角色ARN值，在被投递账号的角色里查找</p>
     */
    public $RoleARN;

    /**
     * @var string <p>外部ID值，可以在被投递账号的角色-载体里找到该值</p>
     */
    public $ExternalId;

    /**
     * @var string <p>topic名称</p>
     */
    public $TopicName;

    /**
     * @var string <p>日志集的名称</p>
     */
    public $LogsetName;

    /**
     * @param string $TopicId <p>日志主题ID</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
     * @param string $Alias <p>别名<br>限制：不能包含字符 |。</p>
     * @param boolean $IsCrossAccount <p>是否是跨账号主题，false不是跨账号主题，true是跨账号主题</p><p>默认值：false</p>
     * @param string $RoleARN <p>跨账号场景下，被投递账号给投递账号创建的角色ARN值，在被投递账号的角色里查找</p>
     * @param string $ExternalId <p>外部ID值，可以在被投递账号的角色-载体里找到该值</p>
     * @param string $TopicName <p>topic名称</p>
     * @param string $LogsetName <p>日志集的名称</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("IsCrossAccount",$param) and $param["IsCrossAccount"] !== null) {
            $this->IsCrossAccount = $param["IsCrossAccount"];
        }

        if (array_key_exists("RoleARN",$param) and $param["RoleARN"] !== null) {
            $this->RoleARN = $param["RoleARN"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }
    }
}
