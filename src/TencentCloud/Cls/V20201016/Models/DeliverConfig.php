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
 * 投递配置入参
 *
 * @method string getRegion() 获取地域信息。

示例：
 ap-guangzhou  广州地域；
ap-nanjing 南京地域。

详细信息请查看官网[地域和访问域名](https://cloud.tencent.com/document/product/614/18940)


 * @method void setRegion(string $Region) 设置地域信息。

示例：
 ap-guangzhou  广州地域；
ap-nanjing 南京地域。

详细信息请查看官网[地域和访问域名](https://cloud.tencent.com/document/product/614/18940)


 * @method string getTopicId() 获取日志主题ID。-通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID。-通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题ID
 * @method integer getScope() 获取投递数据范围。

0: 全部日志, 包括告警策略日常周期执行的所有日志，也包括告警策略变更产生的日志，默认值

1:仅告警触发及恢复日志
 * @method void setScope(integer $Scope) 设置投递数据范围。

0: 全部日志, 包括告警策略日常周期执行的所有日志，也包括告警策略变更产生的日志，默认值

1:仅告警触发及恢复日志
 */
class DeliverConfig extends AbstractModel
{
    /**
     * @var string 地域信息。

示例：
 ap-guangzhou  广州地域；
ap-nanjing 南京地域。

详细信息请查看官网[地域和访问域名](https://cloud.tencent.com/document/product/614/18940)


     */
    public $Region;

    /**
     * @var string 日志主题ID。-通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题ID
     */
    public $TopicId;

    /**
     * @var integer 投递数据范围。

0: 全部日志, 包括告警策略日常周期执行的所有日志，也包括告警策略变更产生的日志，默认值

1:仅告警触发及恢复日志
     */
    public $Scope;

    /**
     * @param string $Region 地域信息。

示例：
 ap-guangzhou  广州地域；
ap-nanjing 南京地域。

详细信息请查看官网[地域和访问域名](https://cloud.tencent.com/document/product/614/18940)


     * @param string $TopicId 日志主题ID。-通过[获取日志主题列表](https://cloud.tencent.com/document/product/614/56454)获取日志主题ID
     * @param integer $Scope 投递数据范围。

0: 全部日志, 包括告警策略日常周期执行的所有日志，也包括告警策略变更产生的日志，默认值

1:仅告警触发及恢复日志
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }
    }
}
