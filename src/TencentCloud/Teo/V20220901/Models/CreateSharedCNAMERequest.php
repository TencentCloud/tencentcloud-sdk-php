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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSharedCNAME请求参数结构体
 *
 * @method string getZoneId() 获取共享 CNAME 所属站点的 ID。	
 * @method void setZoneId(string $ZoneId) 设置共享 CNAME 所属站点的 ID。	
 * @method string getSharedCNAMEPrefix() 获取共享 CNAME 前缀。请输入合法的域名前缀，例如"test-api"、"test-api.com"，限制输入 50 个字符。
共享 CNAME 完整格式为：<自定义前缀>+<zoneid中的12位随机字符串>+"share.eo.dnse[0-5].com"。例如前缀传入 example.com，EO 会为您创建共享 CNAME：example.com.sai2ig51kaa5.eo.dns2.com
示例值：example.com
 * @method void setSharedCNAMEPrefix(string $SharedCNAMEPrefix) 设置共享 CNAME 前缀。请输入合法的域名前缀，例如"test-api"、"test-api.com"，限制输入 50 个字符。
共享 CNAME 完整格式为：<自定义前缀>+<zoneid中的12位随机字符串>+"share.eo.dnse[0-5].com"。例如前缀传入 example.com，EO 会为您创建共享 CNAME：example.com.sai2ig51kaa5.eo.dns2.com
示例值：example.com
 * @method string getDescription() 获取描述。可输入 1-50 个任意字符。
 * @method void setDescription(string $Description) 设置描述。可输入 1-50 个任意字符。
 */
class CreateSharedCNAMERequest extends AbstractModel
{
    /**
     * @var string 共享 CNAME 所属站点的 ID。	
     */
    public $ZoneId;

    /**
     * @var string 共享 CNAME 前缀。请输入合法的域名前缀，例如"test-api"、"test-api.com"，限制输入 50 个字符。
共享 CNAME 完整格式为：<自定义前缀>+<zoneid中的12位随机字符串>+"share.eo.dnse[0-5].com"。例如前缀传入 example.com，EO 会为您创建共享 CNAME：example.com.sai2ig51kaa5.eo.dns2.com
示例值：example.com
     */
    public $SharedCNAMEPrefix;

    /**
     * @var string 描述。可输入 1-50 个任意字符。
     */
    public $Description;

    /**
     * @param string $ZoneId 共享 CNAME 所属站点的 ID。	
     * @param string $SharedCNAMEPrefix 共享 CNAME 前缀。请输入合法的域名前缀，例如"test-api"、"test-api.com"，限制输入 50 个字符。
共享 CNAME 完整格式为：<自定义前缀>+<zoneid中的12位随机字符串>+"share.eo.dnse[0-5].com"。例如前缀传入 example.com，EO 会为您创建共享 CNAME：example.com.sai2ig51kaa5.eo.dns2.com
示例值：example.com
     * @param string $Description 描述。可输入 1-50 个任意字符。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("SharedCNAMEPrefix",$param) and $param["SharedCNAMEPrefix"] !== null) {
            $this->SharedCNAMEPrefix = $param["SharedCNAMEPrefix"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
