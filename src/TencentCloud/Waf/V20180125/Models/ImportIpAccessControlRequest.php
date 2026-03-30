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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportIpAccessControl请求参数结构体
 *
 * @method array getData() 获取导入的IP黑白名单列表
 * @method void setData(array $Data) 设置导入的IP黑白名单列表
 * @method string getDomain() 获取具体域名如：test.qcloudwaf.com
全局域名为：global
 * @method void setDomain(string $Domain) 设置具体域名如：test.qcloudwaf.com
全局域名为：global
 * @method string getSourceType() 获取用于按数据来源导入黑白名单记录，必填。 custom（自定义），用户在控制台手动添加的黑白名单规则 cc（CC 防护	），由 CC 防护模块自动添加的 IP 黑白名单 bot（Bot 防护），由 Bot 防护模块自动添加的 IP 黑白名单 batch（批量域名防护），批量域名维度添加的黑白名单规则
 * @method void setSourceType(string $SourceType) 设置用于按数据来源导入黑白名单记录，必填。 custom（自定义），用户在控制台手动添加的黑白名单规则 cc（CC 防护	），由 CC 防护模块自动添加的 IP 黑白名单 bot（Bot 防护），由 Bot 防护模块自动添加的 IP 黑白名单 batch（批量域名防护），批量域名维度添加的黑白名单规则
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 */
class ImportIpAccessControlRequest extends AbstractModel
{
    /**
     * @var array 导入的IP黑白名单列表
     */
    public $Data;

    /**
     * @var string 具体域名如：test.qcloudwaf.com
全局域名为：global
     */
    public $Domain;

    /**
     * @var string 用于按数据来源导入黑白名单记录，必填。 custom（自定义），用户在控制台手动添加的黑白名单规则 cc（CC 防护	），由 CC 防护模块自动添加的 IP 黑白名单 bot（Bot 防护），由 Bot 防护模块自动添加的 IP 黑白名单 batch（批量域名防护），批量域名维度添加的黑白名单规则
     */
    public $SourceType;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @param array $Data 导入的IP黑白名单列表
     * @param string $Domain 具体域名如：test.qcloudwaf.com
全局域名为：global
     * @param string $SourceType 用于按数据来源导入黑白名单记录，必填。 custom（自定义），用户在控制台手动添加的黑白名单规则 cc（CC 防护	），由 CC 防护模块自动添加的 IP 黑白名单 bot（Bot 防护），由 Bot 防护模块自动添加的 IP 黑白名单 batch（批量域名防护），批量域名维度添加的黑白名单规则
     * @param string $InstanceId 实例Id
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new IpAccessControlParam();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
