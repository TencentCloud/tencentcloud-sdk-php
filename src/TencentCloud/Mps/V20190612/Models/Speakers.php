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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色列表
 *
 * @method string getSpeakerId() 获取<p>角色唯一标识</p>
 * @method void setSpeakerId(string $SpeakerId) 设置<p>角色唯一标识</p>
 * @method string getVoiceId() 获取<p>绑定的音色 ID</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>绑定的音色 ID</p>
 * @method string getGender() 获取<p>性别：male / female，默认 male</p>
 * @method void setGender(string $Gender) 设置<p>性别：male / female，默认 male</p>
 * @method string getAgeGroup() 获取<p>年龄段：child / teenager / youth / middle_aged/ senior，默认 youth</p>
 * @method void setAgeGroup(string $AgeGroup) 设置<p>年龄段：child / teenager / youth / middle_aged/ senior，默认 youth</p>
 * @method string getDescription() 获取<p>角色描述</p>
 * @method void setDescription(string $Description) 设置<p>角色描述</p>
 * @method array getNameTerms() 获取<p>角色人名术语表</p>
 * @method void setNameTerms(array $NameTerms) 设置<p>角色人名术语表</p>
 */
class Speakers extends AbstractModel
{
    /**
     * @var string <p>角色唯一标识</p>
     */
    public $SpeakerId;

    /**
     * @var string <p>绑定的音色 ID</p>
     */
    public $VoiceId;

    /**
     * @var string <p>性别：male / female，默认 male</p>
     */
    public $Gender;

    /**
     * @var string <p>年龄段：child / teenager / youth / middle_aged/ senior，默认 youth</p>
     */
    public $AgeGroup;

    /**
     * @var string <p>角色描述</p>
     */
    public $Description;

    /**
     * @var array <p>角色人名术语表</p>
     */
    public $NameTerms;

    /**
     * @param string $SpeakerId <p>角色唯一标识</p>
     * @param string $VoiceId <p>绑定的音色 ID</p>
     * @param string $Gender <p>性别：male / female，默认 male</p>
     * @param string $AgeGroup <p>年龄段：child / teenager / youth / middle_aged/ senior，默认 youth</p>
     * @param string $Description <p>角色描述</p>
     * @param array $NameTerms <p>角色人名术语表</p>
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
        if (array_key_exists("SpeakerId",$param) and $param["SpeakerId"] !== null) {
            $this->SpeakerId = $param["SpeakerId"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("AgeGroup",$param) and $param["AgeGroup"] !== null) {
            $this->AgeGroup = $param["AgeGroup"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NameTerms",$param) and $param["NameTerms"] !== null) {
            $this->NameTerms = [];
            foreach ($param["NameTerms"] as $key => $value){
                $obj = new TermBase();
                $obj->deserialize($value);
                array_push($this->NameTerms, $obj);
            }
        }
    }
}
