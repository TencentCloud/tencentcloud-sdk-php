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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDDoSBlackWhiteIpList请求参数结构体
 *
 * @method string getInstanceId() 获取资源Id
 * @method void setInstanceId(string $InstanceId) 设置资源Id
 * @method string getOldIpType() 获取当前配置的黑白名单类型，取值black时表示黑名单；取值white时表示白名单
 * @method void setOldIpType(string $OldIpType) 设置当前配置的黑白名单类型，取值black时表示黑名单；取值white时表示白名单
 * @method IpSegment getOldIp() 获取当前配置的Ip段，包含ip与掩码
 * @method void setOldIp(IpSegment $OldIp) 设置当前配置的Ip段，包含ip与掩码
 * @method string getNewIpType() 获取修改后黑白名单类型，取值black时黑名单，取值white时白名单
 * @method void setNewIpType(string $NewIpType) 设置修改后黑白名单类型，取值black时黑名单，取值white时白名单
 * @method IpSegment getNewIp() 获取当前配置的Ip段，包含ip与掩码
 * @method void setNewIp(IpSegment $NewIp) 设置当前配置的Ip段，包含ip与掩码
 */
class ModifyDDoSBlackWhiteIpListRequest extends AbstractModel
{
    /**
     * @var string 资源Id
     */
    public $InstanceId;

    /**
     * @var string 当前配置的黑白名单类型，取值black时表示黑名单；取值white时表示白名单
     */
    public $OldIpType;

    /**
     * @var IpSegment 当前配置的Ip段，包含ip与掩码
     */
    public $OldIp;

    /**
     * @var string 修改后黑白名单类型，取值black时黑名单，取值white时白名单
     */
    public $NewIpType;

    /**
     * @var IpSegment 当前配置的Ip段，包含ip与掩码
     */
    public $NewIp;

    /**
     * @param string $InstanceId 资源Id
     * @param string $OldIpType 当前配置的黑白名单类型，取值black时表示黑名单；取值white时表示白名单
     * @param IpSegment $OldIp 当前配置的Ip段，包含ip与掩码
     * @param string $NewIpType 修改后黑白名单类型，取值black时黑名单，取值white时白名单
     * @param IpSegment $NewIp 当前配置的Ip段，包含ip与掩码
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OldIpType",$param) and $param["OldIpType"] !== null) {
            $this->OldIpType = $param["OldIpType"];
        }

        if (array_key_exists("OldIp",$param) and $param["OldIp"] !== null) {
            $this->OldIp = new IpSegment();
            $this->OldIp->deserialize($param["OldIp"]);
        }

        if (array_key_exists("NewIpType",$param) and $param["NewIpType"] !== null) {
            $this->NewIpType = $param["NewIpType"];
        }

        if (array_key_exists("NewIp",$param) and $param["NewIp"] !== null) {
            $this->NewIp = new IpSegment();
            $this->NewIp->deserialize($param["NewIp"]);
        }
    }
}
