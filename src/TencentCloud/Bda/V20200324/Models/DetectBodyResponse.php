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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectBody返回参数结构体
 *
 * @method array getBodyDetectResults() 获取图中检测出来的人体框。
 * @method void setBodyDetectResults(array $BodyDetectResults) 设置图中检测出来的人体框。
 * @method string getBodyModelVersion() 获取人体识别所用的算法模型版本。
 * @method void setBodyModelVersion(string $BodyModelVersion) 设置人体识别所用的算法模型版本。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DetectBodyResponse extends AbstractModel
{
    /**
     * @var array 图中检测出来的人体框。
     */
    public $BodyDetectResults;

    /**
     * @var string 人体识别所用的算法模型版本。
     */
    public $BodyModelVersion;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $BodyDetectResults 图中检测出来的人体框。
     * @param string $BodyModelVersion 人体识别所用的算法模型版本。
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
        if (array_key_exists('BodyDetectResults',$param) and $param['BodyDetectResults'] !== null) {
            $this->BodyDetectResults = [];
            foreach ($param['BodyDetectResults'] as $key => $value){
                $obj = new BodyDetectResult();
                $obj->deserialize($value);
                array_push($this->BodyDetectResults, $obj);
            }
        }

        if (array_key_exists('BodyModelVersion',$param) and $param['BodyModelVersion'] !== null) {
            $this->BodyModelVersion = $param['BodyModelVersion'];
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
