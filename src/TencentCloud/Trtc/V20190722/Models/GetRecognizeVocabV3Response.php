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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRecognizeVocabV3返回参数结构体
 *
 * @method string getName() 获取<p>词表名称</p>
 * @method void setName(string $Name) 设置<p>词表名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getVocabId() 获取<p>词表 id</p>
 * @method void setVocabId(string $VocabId) 设置<p>词表 id</p>
 * @method array getWordWeights() 获取<p>热词+权重数组</p>
 * @method void setWordWeights(array $WordWeights) 设置<p>热词+权重数组</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method integer getState() 获取<p>是否设置默认词表</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
 * @method void setState(integer $State) 设置<p>是否设置默认词表</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetRecognizeVocabV3Response extends AbstractModel
{
    /**
     * @var string <p>词表名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>词表 id</p>
     */
    public $VocabId;

    /**
     * @var array <p>热词+权重数组</p>
     */
    public $WordWeights;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>是否设置默认词表</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
     */
    public $State;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name <p>词表名称</p>
     * @param string $Description <p>描述</p>
     * @param string $VocabId <p>词表 id</p>
     * @param array $WordWeights <p>热词+权重数组</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param integer $State <p>是否设置默认词表</p><p>枚举值：</p><ul><li>0： 否</li><li>1： 是</li></ul>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VocabId",$param) and $param["VocabId"] !== null) {
            $this->VocabId = $param["VocabId"];
        }

        if (array_key_exists("WordWeights",$param) and $param["WordWeights"] !== null) {
            $this->WordWeights = [];
            foreach ($param["WordWeights"] as $key => $value){
                $obj = new HotWord();
                $obj->deserialize($value);
                array_push($this->WordWeights, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
