<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPersonSample请求参数结构体
 *
 * @method string getPersonId() 获取人物 ID。
 * @method void setPersonId(string $PersonId) 设置人物 ID。
 * @method string getName() 获取名称，长度限制：128 个字符。
 * @method void setName(string $Name) 设置名称，长度限制：128 个字符。
 * @method string getDescription() 获取描述，长度限制：1024 个字符。
 * @method void setDescription(string $Description) 设置描述，长度限制：1024 个字符。
 * @method array getUsages() 获取人物应用场景，可选值：
1. Recognition：用于内容识别，等价于 Recognition.Face。
2. Review：用于内容审核，等价于 Review.Face。
3. All：用于内容识别、内容审核，等价于 1+2。
 * @method void setUsages(array $Usages) 设置人物应用场景，可选值：
1. Recognition：用于内容识别，等价于 Recognition.Face。
2. Review：用于内容审核，等价于 Review.Face。
3. All：用于内容识别、内容审核，等价于 1+2。
 * @method AiSampleFaceOperation getFaceOperationInfo() 获取人脸操作信息。
 * @method void setFaceOperationInfo(AiSampleFaceOperation $FaceOperationInfo) 设置人脸操作信息。
 * @method AiSampleTagOperation getTagOperationInfo() 获取标签操作信息。
 * @method void setTagOperationInfo(AiSampleTagOperation $TagOperationInfo) 设置标签操作信息。
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */
class ModifyPersonSampleRequest extends AbstractModel
{
    /**
     * @var string 人物 ID。
     */
    public $PersonId;

    /**
     * @var string 名称，长度限制：128 个字符。
     */
    public $Name;

    /**
     * @var string 描述，长度限制：1024 个字符。
     */
    public $Description;

    /**
     * @var array 人物应用场景，可选值：
1. Recognition：用于内容识别，等价于 Recognition.Face。
2. Review：用于内容审核，等价于 Review.Face。
3. All：用于内容识别、内容审核，等价于 1+2。
     */
    public $Usages;

    /**
     * @var AiSampleFaceOperation 人脸操作信息。
     */
    public $FaceOperationInfo;

    /**
     * @var AiSampleTagOperation 标签操作信息。
     */
    public $TagOperationInfo;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;

    /**
     * @param string $PersonId 人物 ID。
     * @param string $Name 名称，长度限制：128 个字符。
     * @param string $Description 描述，长度限制：1024 个字符。
     * @param array $Usages 人物应用场景，可选值：
1. Recognition：用于内容识别，等价于 Recognition.Face。
2. Review：用于内容审核，等价于 Review.Face。
3. All：用于内容识别、内容审核，等价于 1+2。
     * @param AiSampleFaceOperation $FaceOperationInfo 人脸操作信息。
     * @param AiSampleTagOperation $TagOperationInfo 标签操作信息。
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
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
        if (array_key_exists('PersonId',$param) and $param['PersonId'] !== null) {
            $this->PersonId = $param['PersonId'];
        }

        if (array_key_exists('Name',$param) and $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('Description',$param) and $param['Description'] !== null) {
            $this->Description = $param['Description'];
        }

        if (array_key_exists('Usages',$param) and $param['Usages'] !== null) {
            $this->Usages = $param['Usages'];
        }

        if (array_key_exists('FaceOperationInfo',$param) and $param['FaceOperationInfo'] !== null) {
            $this->FaceOperationInfo = new AiSampleFaceOperation();
            $this->FaceOperationInfo->deserialize($param['FaceOperationInfo']);
        }

        if (array_key_exists('TagOperationInfo',$param) and $param['TagOperationInfo'] !== null) {
            $this->TagOperationInfo = new AiSampleTagOperation();
            $this->TagOperationInfo->deserialize($param['TagOperationInfo']);
        }

        if (array_key_exists('SubAppId',$param) and $param['SubAppId'] !== null) {
            $this->SubAppId = $param['SubAppId'];
        }
    }
}
