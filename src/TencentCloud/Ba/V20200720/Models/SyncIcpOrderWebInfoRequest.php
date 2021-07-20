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
namespace TencentCloud\Ba\V20200720\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncIcpOrderWebInfo请求参数结构体
 *
 * @method string getIcpOrderId() 获取备案ICP订单号
 * @method void setIcpOrderId(string $IcpOrderId) 设置备案ICP订单号
 * @method string getSourceWebId() 获取订单里的webId
 * @method void setSourceWebId(string $SourceWebId) 设置订单里的webId
 * @method array getTargetWebIds() 获取订单里的webId 数组(如果传入的webIds含有 订单中不包含的webId，会自动跳过)
 * @method void setTargetWebIds(array $TargetWebIds) 设置订单里的webId 数组(如果传入的webIds含有 订单中不包含的webId，会自动跳过)
 * @method array getSyncFields() 获取网站信息字段名 数组
 * @method void setSyncFields(array $SyncFields) 设置网站信息字段名 数组
 * @method boolean getCheckSamePerson() 获取是否先判断同步的网站负责人是否一致 (这里会判断 sitePersonName, sitePersonCerType,sitePersonCerNum三个字段完全一致)  默认:true. 非必要 不建议关闭修改该参数默认值
 * @method void setCheckSamePerson(boolean $CheckSamePerson) 设置是否先判断同步的网站负责人是否一致 (这里会判断 sitePersonName, sitePersonCerType,sitePersonCerNum三个字段完全一致)  默认:true. 非必要 不建议关闭修改该参数默认值
 */
class SyncIcpOrderWebInfoRequest extends AbstractModel
{
    /**
     * @var string 备案ICP订单号
     */
    public $IcpOrderId;

    /**
     * @var string 订单里的webId
     */
    public $SourceWebId;

    /**
     * @var array 订单里的webId 数组(如果传入的webIds含有 订单中不包含的webId，会自动跳过)
     */
    public $TargetWebIds;

    /**
     * @var array 网站信息字段名 数组
     */
    public $SyncFields;

    /**
     * @var boolean 是否先判断同步的网站负责人是否一致 (这里会判断 sitePersonName, sitePersonCerType,sitePersonCerNum三个字段完全一致)  默认:true. 非必要 不建议关闭修改该参数默认值
     */
    public $CheckSamePerson;

    /**
     * @param string $IcpOrderId 备案ICP订单号
     * @param string $SourceWebId 订单里的webId
     * @param array $TargetWebIds 订单里的webId 数组(如果传入的webIds含有 订单中不包含的webId，会自动跳过)
     * @param array $SyncFields 网站信息字段名 数组
     * @param boolean $CheckSamePerson 是否先判断同步的网站负责人是否一致 (这里会判断 sitePersonName, sitePersonCerType,sitePersonCerNum三个字段完全一致)  默认:true. 非必要 不建议关闭修改该参数默认值
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
        if (array_key_exists("IcpOrderId",$param) and $param["IcpOrderId"] !== null) {
            $this->IcpOrderId = $param["IcpOrderId"];
        }

        if (array_key_exists("SourceWebId",$param) and $param["SourceWebId"] !== null) {
            $this->SourceWebId = $param["SourceWebId"];
        }

        if (array_key_exists("TargetWebIds",$param) and $param["TargetWebIds"] !== null) {
            $this->TargetWebIds = $param["TargetWebIds"];
        }

        if (array_key_exists("SyncFields",$param) and $param["SyncFields"] !== null) {
            $this->SyncFields = $param["SyncFields"];
        }

        if (array_key_exists("CheckSamePerson",$param) and $param["CheckSamePerson"] !== null) {
            $this->CheckSamePerson = $param["CheckSamePerson"];
        }
    }
}
