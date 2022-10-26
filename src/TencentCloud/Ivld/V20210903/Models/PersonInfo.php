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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人物信息
 *
 * @method string getName() 获取公众人物姓名
 * @method void setName(string $Name) 设置公众人物姓名
 * @method string getJob() 获取公众人物职务
 * @method void setJob(string $Job) 设置公众人物职务
 * @method integer getFirstAppear() 获取首次出现模态，可选值为[1,3]，详细参见AppearIndex定义
 * @method void setFirstAppear(integer $FirstAppear) 设置首次出现模态，可选值为[1,3]，详细参见AppearIndex定义
 * @method AppearInfo getAppearInfo() 获取人物出现信息
 * @method void setAppearInfo(AppearInfo $AppearInfo) 设置人物出现信息
 * @method Rectf getAppearRect() 获取人脸在图片中的位置，仅在图片标签任务有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppearRect(Rectf $AppearRect) 设置人脸在图片中的位置，仅在图片标签任务有效
注意：此字段可能返回 null，表示取不到有效值。
 */
class PersonInfo extends AbstractModel
{
    /**
     * @var string 公众人物姓名
     */
    public $Name;

    /**
     * @var string 公众人物职务
     */
    public $Job;

    /**
     * @var integer 首次出现模态，可选值为[1,3]，详细参见AppearIndex定义
     */
    public $FirstAppear;

    /**
     * @var AppearInfo 人物出现信息
     */
    public $AppearInfo;

    /**
     * @var Rectf 人脸在图片中的位置，仅在图片标签任务有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppearRect;

    /**
     * @param string $Name 公众人物姓名
     * @param string $Job 公众人物职务
     * @param integer $FirstAppear 首次出现模态，可选值为[1,3]，详细参见AppearIndex定义
     * @param AppearInfo $AppearInfo 人物出现信息
     * @param Rectf $AppearRect 人脸在图片中的位置，仅在图片标签任务有效
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Job",$param) and $param["Job"] !== null) {
            $this->Job = $param["Job"];
        }

        if (array_key_exists("FirstAppear",$param) and $param["FirstAppear"] !== null) {
            $this->FirstAppear = $param["FirstAppear"];
        }

        if (array_key_exists("AppearInfo",$param) and $param["AppearInfo"] !== null) {
            $this->AppearInfo = new AppearInfo();
            $this->AppearInfo->deserialize($param["AppearInfo"]);
        }

        if (array_key_exists("AppearRect",$param) and $param["AppearRect"] !== null) {
            $this->AppearRect = new Rectf();
            $this->AppearRect->deserialize($param["AppearRect"]);
        }
    }
}
