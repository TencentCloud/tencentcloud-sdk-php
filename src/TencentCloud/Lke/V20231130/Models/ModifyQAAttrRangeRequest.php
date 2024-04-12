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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyQAAttrRange请求参数结构体
 *
 * @method string getBotBizId() 获取机器人ID
 * @method void setBotBizId(string $BotBizId) 设置机器人ID
 * @method array getQaBizIds() 获取问答ID
 * @method void setQaBizIds(array $QaBizIds) 设置问答ID
 * @method integer getAttrRange() 获取属性标签适用范围 1：全部，2：按条件
 * @method void setAttrRange(integer $AttrRange) 设置属性标签适用范围 1：全部，2：按条件
 * @method array getAttrLabels() 获取属性标签引用
 * @method void setAttrLabels(array $AttrLabels) 设置属性标签引用
 */
class ModifyQAAttrRangeRequest extends AbstractModel
{
    /**
     * @var string 机器人ID
     */
    public $BotBizId;

    /**
     * @var array 问答ID
     */
    public $QaBizIds;

    /**
     * @var integer 属性标签适用范围 1：全部，2：按条件
     */
    public $AttrRange;

    /**
     * @var array 属性标签引用
     */
    public $AttrLabels;

    /**
     * @param string $BotBizId 机器人ID
     * @param array $QaBizIds 问答ID
     * @param integer $AttrRange 属性标签适用范围 1：全部，2：按条件
     * @param array $AttrLabels 属性标签引用
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("QaBizIds",$param) and $param["QaBizIds"] !== null) {
            $this->QaBizIds = $param["QaBizIds"];
        }

        if (array_key_exists("AttrRange",$param) and $param["AttrRange"] !== null) {
            $this->AttrRange = $param["AttrRange"];
        }

        if (array_key_exists("AttrLabels",$param) and $param["AttrLabels"] !== null) {
            $this->AttrLabels = [];
            foreach ($param["AttrLabels"] as $key => $value){
                $obj = new AttrLabelRefer();
                $obj->deserialize($value);
                array_push($this->AttrLabels, $obj);
            }
        }
    }
}
