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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仪表盘 topic与地域信息
 *
 * @method string getTopicId() 获取日志主题id
 * @method void setTopicId(string $TopicId) 设置日志主题id
 * @method integer getRegionId() 获取日志主题id 所在的地域id
地域ID - 访问链接查看详情：https://iwiki.woa.com/pages/viewpage.action?pageId=780556968#id-地域码表-一.region大区（标准地域）
 * @method void setRegionId(integer $RegionId) 设置日志主题id 所在的地域id
地域ID - 访问链接查看详情：https://iwiki.woa.com/pages/viewpage.action?pageId=780556968#id-地域码表-一.region大区（标准地域）
 */
class TopicIdAndRegion extends AbstractModel
{
    /**
     * @var string 日志主题id
     */
    public $TopicId;

    /**
     * @var integer 日志主题id 所在的地域id
地域ID - 访问链接查看详情：https://iwiki.woa.com/pages/viewpage.action?pageId=780556968#id-地域码表-一.region大区（标准地域）
     */
    public $RegionId;

    /**
     * @param string $TopicId 日志主题id
     * @param integer $RegionId 日志主题id 所在的地域id
地域ID - 访问链接查看详情：https://iwiki.woa.com/pages/viewpage.action?pageId=780556968#id-地域码表-一.region大区（标准地域）
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

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
