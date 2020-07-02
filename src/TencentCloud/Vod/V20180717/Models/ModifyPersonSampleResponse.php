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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPersonSample返回参数结构体
 *
 * @method AiSamplePerson getPerson() 获取人物信息。
 * @method void setPerson(AiSamplePerson $Person) 设置人物信息。
 * @method array getFailFaceInfoSet() 获取处理失败的人脸信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailFaceInfoSet(array $FailFaceInfoSet) 设置处理失败的人脸信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyPersonSampleResponse extends AbstractModel
{
    /**
     * @var AiSamplePerson 人物信息。
     */
    public $Person;

    /**
     * @var array 处理失败的人脸信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailFaceInfoSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AiSamplePerson $Person 人物信息。
     * @param array $FailFaceInfoSet 处理失败的人脸信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists('Person',$param) and $param['Person'] !== null) {
            $this->Person = new AiSamplePerson();
            $this->Person->deserialize($param['Person']);
        }

        if (array_key_exists('FailFaceInfoSet',$param) and $param['FailFaceInfoSet'] !== null) {
            $this->FailFaceInfoSet = [];
            foreach ($param['FailFaceInfoSet'] as $key => $value){
                $obj = new AiSampleFailFaceInfo();
                $obj->deserialize($value);
                array_push($this->FailFaceInfoSet, $obj);
            }
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
