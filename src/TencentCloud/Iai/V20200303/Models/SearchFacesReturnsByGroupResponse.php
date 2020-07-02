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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchFacesReturnsByGroup返回参数结构体
 *
 * @method integer getFaceNum() 获取搜索的人员库中包含的人脸数。
 * @method void setFaceNum(integer $FaceNum) 设置搜索的人员库中包含的人脸数。
 * @method array getResultsReturnsByGroup() 获取识别结果。
 * @method void setResultsReturnsByGroup(array $ResultsReturnsByGroup) 设置识别结果。
 * @method string getFaceModelVersion() 获取人脸识别所用的算法模型版本。
 * @method void setFaceModelVersion(string $FaceModelVersion) 设置人脸识别所用的算法模型版本。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class SearchFacesReturnsByGroupResponse extends AbstractModel
{
    /**
     * @var integer 搜索的人员库中包含的人脸数。
     */
    public $FaceNum;

    /**
     * @var array 识别结果。
     */
    public $ResultsReturnsByGroup;

    /**
     * @var string 人脸识别所用的算法模型版本。
     */
    public $FaceModelVersion;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $FaceNum 搜索的人员库中包含的人脸数。
     * @param array $ResultsReturnsByGroup 识别结果。
     * @param string $FaceModelVersion 人脸识别所用的算法模型版本。
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
        if (array_key_exists('FaceNum',$param) and $param['FaceNum'] !== null) {
            $this->FaceNum = $param['FaceNum'];
        }

        if (array_key_exists('ResultsReturnsByGroup',$param) and $param['ResultsReturnsByGroup'] !== null) {
            $this->ResultsReturnsByGroup = [];
            foreach ($param['ResultsReturnsByGroup'] as $key => $value){
                $obj = new ResultsReturnsByGroup();
                $obj->deserialize($value);
                array_push($this->ResultsReturnsByGroup, $obj);
            }
        }

        if (array_key_exists('FaceModelVersion',$param) and $param['FaceModelVersion'] !== null) {
            $this->FaceModelVersion = $param['FaceModelVersion'];
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
