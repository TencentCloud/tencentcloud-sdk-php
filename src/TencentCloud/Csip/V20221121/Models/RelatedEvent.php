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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 相关攻击事件结构
 *
 * @method string getEventID() 获取事件ID
 * @method void setEventID(string $EventID) 设置事件ID
 * @method string getDescription() 获取事件描述
 * @method void setDescription(string $Description) 设置事件描述
 * @method integer getRelatedCount() 获取与事件关联的告警数量
 * @method void setRelatedCount(integer $RelatedCount) 设置与事件关联的告警数量
 */
class RelatedEvent extends AbstractModel
{
    /**
     * @var string 事件ID
     */
    public $EventID;

    /**
     * @var string 事件描述
     */
    public $Description;

    /**
     * @var integer 与事件关联的告警数量
     */
    public $RelatedCount;

    /**
     * @param string $EventID 事件ID
     * @param string $Description 事件描述
     * @param integer $RelatedCount 与事件关联的告警数量
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
        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RelatedCount",$param) and $param["RelatedCount"] !== null) {
            $this->RelatedCount = $param["RelatedCount"];
        }
    }
}
