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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnBindingAllPolicyObject请求参数结构体
 *
 * @method string getModule() 获取<p>固定值，为&quot;monitor&quot;</p>
 * @method void setModule(string $Module) 设置<p>固定值，为&quot;monitor&quot;</p>
 * @method integer getGroupId() 获取<p>策略组id，如传入 PolicyId 则该字段被忽略可传入任意值如 0</p>
 * @method void setGroupId(integer $GroupId) 设置<p>策略组id，如传入 PolicyId 则该字段被忽略可传入任意值如 0</p>
 * @method string getPolicyId() 获取<p>告警策略ID，使用此字段时 GroupId 会被忽略</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>告警策略ID，使用此字段时 GroupId 会被忽略</p>
 * @method string getEbSubject() 获取<p>事件配置的告警</p>
 * @method void setEbSubject(string $EbSubject) 设置<p>事件配置的告警</p>
 * @method integer getEbEventFlag() 获取<p>是否配置了事件告警</p>
 * @method void setEbEventFlag(integer $EbEventFlag) 设置<p>是否配置了事件告警</p>
 */
class UnBindingAllPolicyObjectRequest extends AbstractModel
{
    /**
     * @var string <p>固定值，为&quot;monitor&quot;</p>
     */
    public $Module;

    /**
     * @var integer <p>策略组id，如传入 PolicyId 则该字段被忽略可传入任意值如 0</p>
     */
    public $GroupId;

    /**
     * @var string <p>告警策略ID，使用此字段时 GroupId 会被忽略</p>
     */
    public $PolicyId;

    /**
     * @var string <p>事件配置的告警</p>
     */
    public $EbSubject;

    /**
     * @var integer <p>是否配置了事件告警</p>
     */
    public $EbEventFlag;

    /**
     * @param string $Module <p>固定值，为&quot;monitor&quot;</p>
     * @param integer $GroupId <p>策略组id，如传入 PolicyId 则该字段被忽略可传入任意值如 0</p>
     * @param string $PolicyId <p>告警策略ID，使用此字段时 GroupId 会被忽略</p>
     * @param string $EbSubject <p>事件配置的告警</p>
     * @param integer $EbEventFlag <p>是否配置了事件告警</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("EbSubject",$param) and $param["EbSubject"] !== null) {
            $this->EbSubject = $param["EbSubject"];
        }

        if (array_key_exists("EbEventFlag",$param) and $param["EbEventFlag"] !== null) {
            $this->EbEventFlag = $param["EbEventFlag"];
        }
    }
}
