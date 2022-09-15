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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人脸识别结果
 *
 * @method string getId() 获取人物唯一标识 ID。
 * @method void setId(string $Id) 设置人物唯一标识 ID。
 * @method string getType() 获取人物库类型，表示识别出的人物来自哪个人物库：
<li>Default：默认人物库；</li>
<li>UserDefine：用户自定义人物库。</li>
 * @method void setType(string $Type) 设置人物库类型，表示识别出的人物来自哪个人物库：
<li>Default：默认人物库；</li>
<li>UserDefine：用户自定义人物库。</li>
 * @method string getName() 获取人物名称。
 * @method void setName(string $Name) 设置人物名称。
 * @method array getSegmentSet() 获取人物出现的片段结果集。
 * @method void setSegmentSet(array $SegmentSet) 设置人物出现的片段结果集。
 * @method string getGender() 获取人物性别：
<li>Male：男性；</li>
<li>Female：女性。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGender(string $Gender) 设置人物性别：
<li>Male：男性；</li>
<li>Female：女性。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirthday() 获取人物出生日期。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthday(string $Birthday) 设置人物出生日期。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProfession() 获取人物职业或者职务。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProfession(string $Profession) 设置人物职业或者职务。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchoolOfGraduation() 获取人物毕业院校。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchoolOfGraduation(string $SchoolOfGraduation) 设置人物毕业院校。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAbstract() 获取人物简介。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbstract(string $Abstract) 设置人物简介。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlaceOfBirth() 获取人物出生地或者籍贯。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlaceOfBirth(string $PlaceOfBirth) 设置人物出生地或者籍贯。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPersonType() 获取人物类型：
<li>Politician：官员；</li>
<li>Artist：艺人。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonType(string $PersonType) 设置人物类型：
<li>Politician：官员；</li>
<li>Artist：艺人。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取敏感度标注：
<li>Normal：正常；</li>
<li>Sensitive：敏感。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置敏感度标注：
<li>Normal：正常；</li>
<li>Sensitive：敏感。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取截图链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置截图链接
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiRecognitionTaskFaceResultItem extends AbstractModel
{
    /**
     * @var string 人物唯一标识 ID。
     */
    public $Id;

    /**
     * @var string 人物库类型，表示识别出的人物来自哪个人物库：
<li>Default：默认人物库；</li>
<li>UserDefine：用户自定义人物库。</li>
     */
    public $Type;

    /**
     * @var string 人物名称。
     */
    public $Name;

    /**
     * @var array 人物出现的片段结果集。
     */
    public $SegmentSet;

    /**
     * @var string 人物性别：
<li>Male：男性；</li>
<li>Female：女性。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gender;

    /**
     * @var string 人物出生日期。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Birthday;

    /**
     * @var string 人物职业或者职务。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Profession;

    /**
     * @var string 人物毕业院校。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchoolOfGraduation;

    /**
     * @var string 人物简介。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Abstract;

    /**
     * @var string 人物出生地或者籍贯。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlaceOfBirth;

    /**
     * @var string 人物类型：
<li>Politician：官员；</li>
<li>Artist：艺人。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersonType;

    /**
     * @var string 敏感度标注：
<li>Normal：正常；</li>
<li>Sensitive：敏感。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 截图链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @param string $Id 人物唯一标识 ID。
     * @param string $Type 人物库类型，表示识别出的人物来自哪个人物库：
<li>Default：默认人物库；</li>
<li>UserDefine：用户自定义人物库。</li>
     * @param string $Name 人物名称。
     * @param array $SegmentSet 人物出现的片段结果集。
     * @param string $Gender 人物性别：
<li>Male：男性；</li>
<li>Female：女性。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Birthday 人物出生日期。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Profession 人物职业或者职务。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchoolOfGraduation 人物毕业院校。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Abstract 人物简介。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PlaceOfBirth 人物出生地或者籍贯。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PersonType 人物类型：
<li>Politician：官员；</li>
<li>Artist：艺人。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 敏感度标注：
<li>Normal：正常；</li>
<li>Sensitive：敏感。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 截图链接
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new AiRecognitionTaskFaceSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Profession",$param) and $param["Profession"] !== null) {
            $this->Profession = $param["Profession"];
        }

        if (array_key_exists("SchoolOfGraduation",$param) and $param["SchoolOfGraduation"] !== null) {
            $this->SchoolOfGraduation = $param["SchoolOfGraduation"];
        }

        if (array_key_exists("Abstract",$param) and $param["Abstract"] !== null) {
            $this->Abstract = $param["Abstract"];
        }

        if (array_key_exists("PlaceOfBirth",$param) and $param["PlaceOfBirth"] !== null) {
            $this->PlaceOfBirth = $param["PlaceOfBirth"];
        }

        if (array_key_exists("PersonType",$param) and $param["PersonType"] !== null) {
            $this->PersonType = $param["PersonType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
