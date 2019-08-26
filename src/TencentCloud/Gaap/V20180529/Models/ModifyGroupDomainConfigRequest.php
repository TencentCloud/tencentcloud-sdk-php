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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getGroupId() 获取通道组ID。
 * @method void setGroupId(string $GroupId) 设置通道组ID。
 * @method string getDefaultDnsIp() 获取域名解析默认访问IP或域名。
 * @method void setDefaultDnsIp(string $DefaultDnsIp) 设置域名解析默认访问IP或域名。
 * @method array getAccessRegionList() 获取就近接入区域配置。
 * @method void setAccessRegionList(array $AccessRegionList) 设置就近接入区域配置。
 */

/**
 *ModifyGroupDomainConfig请求参数结构体
 */
class ModifyGroupDomainConfigRequest extends AbstractModel
{
    /**
     * @var string 通道组ID。
     */
    public $GroupId;

    /**
     * @var string 域名解析默认访问IP或域名。
     */
    public $DefaultDnsIp;

    /**
     * @var array 就近接入区域配置。
     */
    public $AccessRegionList;
    /**
     * @param string $GroupId 通道组ID。
     * @param string $DefaultDnsIp 域名解析默认访问IP或域名。
     * @param array $AccessRegionList 就近接入区域配置。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("DefaultDnsIp",$param) and $param["DefaultDnsIp"] !== null) {
            $this->DefaultDnsIp = $param["DefaultDnsIp"];
        }

        if (array_key_exists("AccessRegionList",$param) and $param["AccessRegionList"] !== null) {
            $this->AccessRegionList = [];
            foreach ($param["AccessRegionList"] as $key => $value){
                $obj = new AccessRegionDomainConf();
                $obj->deserialize($value);
                array_push($this->AccessRegionList, $obj);
            }
        }
    }
}
