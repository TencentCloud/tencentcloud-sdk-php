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
 * 词表内容
 *
 * @method string getName() 获取<p>热词表名称</p>
 * @method void setName(string $Name) 设置<p>热词表名称</p>
 * @method string getDescription() 获取<p>热词表描述</p>
 * @method void setDescription(string $Description) 设置<p>热词表描述</p>
 * @method string getVocabId() 获取<p>热词表ID</p>
 * @method void setVocabId(string $VocabId) 设置<p>热词表ID</p>
 * @method array getWordWeights() 获取<p>词权重列表</p>
 * @method void setWordWeights(array $WordWeights) 设置<p>词权重列表</p>
 * @method string getCreateTime() 获取<p>词表创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>词表创建时间</p>
 * @method string getUpdateTime() 获取<p>词表更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>词表更新时间</p>
 * @method integer getState() 获取<p>热词表状态，1为默认状态即在识别时默认加载该热词表进行识别，0为初始状态</p>
 * @method void setState(integer $State) 设置<p>热词表状态，1为默认状态即在识别时默认加载该热词表进行识别，0为初始状态</p>
 */
class Vocab extends AbstractModel
{
    /**
     * @var string <p>热词表名称</p>
     */
    public $Name;

    /**
     * @var string <p>热词表描述</p>
     */
    public $Description;

    /**
     * @var string <p>热词表ID</p>
     */
    public $VocabId;

    /**
     * @var array <p>词权重列表</p>
     */
    public $WordWeights;

    /**
     * @var string <p>词表创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>词表更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>热词表状态，1为默认状态即在识别时默认加载该热词表进行识别，0为初始状态</p>
     */
    public $State;

    /**
     * @param string $Name <p>热词表名称</p>
     * @param string $Description <p>热词表描述</p>
     * @param string $VocabId <p>热词表ID</p>
     * @param array $WordWeights <p>词权重列表</p>
     * @param string $CreateTime <p>词表创建时间</p>
     * @param string $UpdateTime <p>词表更新时间</p>
     * @param integer $State <p>热词表状态，1为默认状态即在识别时默认加载该热词表进行识别，0为初始状态</p>
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
    }
}
