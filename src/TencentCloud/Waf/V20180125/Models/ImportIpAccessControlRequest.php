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
 * @method string getSourceType() 获取是否为批量防护IP黑白名单，当为批量防护IP黑白名单时，取值为batch，否则为空
 * @method void setSourceType(string $SourceType) 设置是否为批量防护IP黑白名单，当为批量防护IP黑白名单时，取值为batch，否则为空
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
     * @var string 是否为批量防护IP黑白名单，当为批量防护IP黑白名单时，取值为batch，否则为空
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
     * @param string $SourceType 是否为批量防护IP黑白名单，当为批量防护IP黑白名单时，取值为batch，否则为空
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
