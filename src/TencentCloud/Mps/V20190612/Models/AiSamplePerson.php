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
 * AI 样本管理，人物信息。
 *
 * @method string getPersonId() 获取<p>人物 ID。</p>
 * @method void setPersonId(string $PersonId) 设置<p>人物 ID。</p>
 * @method string getName() 获取<p>人物名称。</p>
 * @method void setName(string $Name) 设置<p>人物名称。</p>
 * @method string getDescription() 获取<p>人物描述。</p>
 * @method void setDescription(string $Description) 设置<p>人物描述。</p>
 * @method array getFaceInfoSet() 获取<p>人脸信息。</p>
 * @method void setFaceInfoSet(array $FaceInfoSet) 设置<p>人脸信息。</p>
 * @method array getTagSet() 获取<p>人物标签。</p>
 * @method void setTagSet(array $TagSet) 设置<p>人物标签。</p>
 * @method array getUsageSet() 获取<p>应用场景。</p>
 * @method void setUsageSet(array $UsageSet) 设置<p>应用场景。</p>
 * @method string getCreateTime() 获取<p>创建时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
 * @method string getUpdateTime() 获取<p>最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
 */
class AiSamplePerson extends AbstractModel
{
    /**
     * @var string <p>人物 ID。</p>
     */
    public $PersonId;

    /**
     * @var string <p>人物名称。</p>
     */
    public $Name;

    /**
     * @var string <p>人物描述。</p>
     */
    public $Description;

    /**
     * @var array <p>人脸信息。</p>
     */
    public $FaceInfoSet;

    /**
     * @var array <p>人物标签。</p>
     */
    public $TagSet;

    /**
     * @var array <p>应用场景。</p>
     */
    public $UsageSet;

    /**
     * @var string <p>创建时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
     */
    public $UpdateTime;

    /**
     * @param string $PersonId <p>人物 ID。</p>
     * @param string $Name <p>人物名称。</p>
     * @param string $Description <p>人物描述。</p>
     * @param array $FaceInfoSet <p>人脸信息。</p>
     * @param array $TagSet <p>人物标签。</p>
     * @param array $UsageSet <p>应用场景。</p>
     * @param string $CreateTime <p>创建时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
     * @param string $UpdateTime <p>最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FaceInfoSet",$param) and $param["FaceInfoSet"] !== null) {
            $this->FaceInfoSet = [];
            foreach ($param["FaceInfoSet"] as $key => $value){
                $obj = new AiSampleFaceInfo();
                $obj->deserialize($value);
                array_push($this->FaceInfoSet, $obj);
            }
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = $param["TagSet"];
        }

        if (array_key_exists("UsageSet",$param) and $param["UsageSet"] !== null) {
            $this->UsageSet = $param["UsageSet"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
