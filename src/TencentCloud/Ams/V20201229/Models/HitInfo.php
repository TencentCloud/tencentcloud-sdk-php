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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关键词命中位置信息
 *
 * @method string getType() 获取标识模型命中还是关键词命中
 * @method void setType(string $Type) 设置标识模型命中还是关键词命中
 * @method string getKeyword() 获取命中关键词
 * @method void setKeyword(string $Keyword) 设置命中关键词
 * @method string getLibName() 获取自定义词库名称
 * @method void setLibName(string $LibName) 设置自定义词库名称
 * @method array getPositions() 获取	位置信息
 * @method void setPositions(array $Positions) 设置	位置信息
 */
class HitInfo extends AbstractModel
{
    /**
     * @var string 标识模型命中还是关键词命中
     */
    public $Type;

    /**
     * @var string 命中关键词
     */
    public $Keyword;

    /**
     * @var string 自定义词库名称
     */
    public $LibName;

    /**
     * @var array 	位置信息
     */
    public $Positions;

    /**
     * @param string $Type 标识模型命中还是关键词命中
     * @param string $Keyword 命中关键词
     * @param string $LibName 自定义词库名称
     * @param array $Positions 	位置信息
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("Positions",$param) and $param["Positions"] !== null) {
            $this->Positions = [];
            foreach ($param["Positions"] as $key => $value){
                $obj = new Position();
                $obj->deserialize($value);
                array_push($this->Positions, $obj);
            }
        }
    }
}
