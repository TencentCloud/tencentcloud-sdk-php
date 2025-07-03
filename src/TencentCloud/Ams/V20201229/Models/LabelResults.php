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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 歌曲识别结果
 *
 * @method string getScene() 获取场景
 * @method void setScene(string $Scene) 设置场景
 * @method integer getSuggestion() 获取建议值
 * @method void setSuggestion(integer $Suggestion) 设置建议值
 * @method string getLabel() 获取标签
 * @method void setLabel(string $Label) 设置标签
 * @method string getName() 获取名称：歌曲名，语种名，说话人名 等
 * @method void setName(string $Name) 设置名称：歌曲名，语种名，说话人名 等
 * @method integer getScore() 获取得分
 * @method void setScore(integer $Score) 设置得分
 * @method float getStartTime() 获取开始时间
 * @method void setStartTime(float $StartTime) 设置开始时间
 * @method float getEndTime() 获取结束时间
 * @method void setEndTime(float $EndTime) 设置结束时间
 */
class LabelResults extends AbstractModel
{
    /**
     * @var string 场景
     */
    public $Scene;

    /**
     * @var integer 建议值
     */
    public $Suggestion;

    /**
     * @var string 标签
     */
    public $Label;

    /**
     * @var string 名称：歌曲名，语种名，说话人名 等
     */
    public $Name;

    /**
     * @var integer 得分
     */
    public $Score;

    /**
     * @var float 开始时间
     */
    public $StartTime;

    /**
     * @var float 结束时间
     */
    public $EndTime;

    /**
     * @param string $Scene 场景
     * @param integer $Suggestion 建议值
     * @param string $Label 标签
     * @param string $Name 名称：歌曲名，语种名，说话人名 等
     * @param integer $Score 得分
     * @param float $StartTime 开始时间
     * @param float $EndTime 结束时间
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
