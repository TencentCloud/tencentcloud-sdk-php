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
 * 仪表盘关联的topic信息
 *
 * @method string getTopicId() 获取主题id
 * @method void setTopicId(string $TopicId) 设置主题id
 * @method string getRegion() 获取topic所在的地域。
- 1:广州
- 4:上海
- 5:中国香港
- 7:上海金融
- 8:北京
- 9:新加坡
- 11:深圳金融
- 15:硅谷
- 16:成都
- 17:法兰克福
- 18:首尔
- 19:重庆
- 22:弗吉尼亚
- 23:曼谷
- 25:东京
- 33:南京
- 36:天津
- 39:台北
- 46:北京金融
- 72:雅加达
- 74:圣保罗
- 78:上海自动驾驶云
 * @method void setRegion(string $Region) 设置topic所在的地域。
- 1:广州
- 4:上海
- 5:中国香港
- 7:上海金融
- 8:北京
- 9:新加坡
- 11:深圳金融
- 15:硅谷
- 16:成都
- 17:法兰克福
- 18:首尔
- 19:重庆
- 22:弗吉尼亚
- 23:曼谷
- 25:东京
- 33:南京
- 36:天津
- 39:台北
- 46:北京金融
- 72:雅加达
- 74:圣保罗
- 78:上海自动驾驶云
 */
class DashboardTopicInfo extends AbstractModel
{
    /**
     * @var string 主题id
     */
    public $TopicId;

    /**
     * @var string topic所在的地域。
- 1:广州
- 4:上海
- 5:中国香港
- 7:上海金融
- 8:北京
- 9:新加坡
- 11:深圳金融
- 15:硅谷
- 16:成都
- 17:法兰克福
- 18:首尔
- 19:重庆
- 22:弗吉尼亚
- 23:曼谷
- 25:东京
- 33:南京
- 36:天津
- 39:台北
- 46:北京金融
- 72:雅加达
- 74:圣保罗
- 78:上海自动驾驶云
     */
    public $Region;

    /**
     * @param string $TopicId 主题id
     * @param string $Region topic所在的地域。
- 1:广州
- 4:上海
- 5:中国香港
- 7:上海金融
- 8:北京
- 9:新加坡
- 11:深圳金融
- 15:硅谷
- 16:成都
- 17:法兰克福
- 18:首尔
- 19:重庆
- 22:弗吉尼亚
- 23:曼谷
- 25:东京
- 33:南京
- 36:天津
- 39:台北
- 46:北京金融
- 72:雅加达
- 74:圣保罗
- 78:上海自动驾驶云
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
