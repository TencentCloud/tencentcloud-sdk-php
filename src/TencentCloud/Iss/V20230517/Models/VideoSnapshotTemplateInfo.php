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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 截图模板信息
 *
 * @method string getTemplateId() 获取<p>截图模板Id</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>截图模板Id</p>
 * @method string getName() 获取<p>截图模板名称</p>
 * @method void setName(string $Name) 设置<p>截图模板名称</p>
 * @method integer getType() 获取<p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
 * @method void setType(integer $Type) 设置<p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
 * @method integer getInterval() 获取<p>截帧频率</p>
 * @method void setInterval(integer $Interval) 设置<p>截帧频率</p>
 * @method MultiVideoSnapshotMode getMultiMode() 获取<p>多张模式</p>
 * @method void setMultiMode(MultiVideoSnapshotMode $MultiMode) 设置<p>多张模式</p>
 * @method array getTimes() 获取<p>生效时段</p>
 * @method void setTimes(array $Times) 设置<p>生效时段</p>
 * @method integer getRelatedConfigCount() 获取<p>模板关联的配置数</p>
 * @method void setRelatedConfigCount(integer $RelatedConfigCount) 设置<p>模板关联的配置数</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>最近一次更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最近一次更新时间</p>
 */
class VideoSnapshotTemplateInfo extends AbstractModel
{
    /**
     * @var string <p>截图模板Id</p>
     */
    public $TemplateId;

    /**
     * @var string <p>截图模板名称</p>
     */
    public $Name;

    /**
     * @var integer <p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>截帧频率</p>
     */
    public $Interval;

    /**
     * @var MultiVideoSnapshotMode <p>多张模式</p>
     */
    public $MultiMode;

    /**
     * @var array <p>生效时段</p>
     */
    public $Times;

    /**
     * @var integer <p>模板关联的配置数</p>
     */
    public $RelatedConfigCount;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最近一次更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param string $TemplateId <p>截图模板Id</p>
     * @param string $Name <p>截图模板名称</p>
     * @param integer $Type <p>截图类型</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
     * @param integer $Interval <p>截帧频率</p>
     * @param MultiVideoSnapshotMode $MultiMode <p>多张模式</p>
     * @param array $Times <p>生效时段</p>
     * @param integer $RelatedConfigCount <p>模板关联的配置数</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>最近一次更新时间</p>
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("MultiMode",$param) and $param["MultiMode"] !== null) {
            $this->MultiMode = new MultiVideoSnapshotMode();
            $this->MultiMode->deserialize($param["MultiMode"]);
        }

        if (array_key_exists("Times",$param) and $param["Times"] !== null) {
            $this->Times = [];
            foreach ($param["Times"] as $key => $value){
                $obj = new EffectiveTime();
                $obj->deserialize($value);
                array_push($this->Times, $obj);
            }
        }

        if (array_key_exists("RelatedConfigCount",$param) and $param["RelatedConfigCount"] !== null) {
            $this->RelatedConfigCount = $param["RelatedConfigCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
