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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ocr关键词命中位置信息
 *
 * @method string getType() 获取<p>标识模型命中还是关键词命中</p>
 * @method void setType(string $Type) 设置<p>标识模型命中还是关键词命中</p>
 * @method string getKeyword() 获取<p>命中关键词</p>
 * @method void setKeyword(string $Keyword) 设置<p>命中关键词</p>
 * @method string getLibName() 获取<p>自定义词库名称</p>
 * @method void setLibName(string $LibName) 设置<p>自定义词库名称</p>
 * @method array getPositions() 获取<p>位置信息</p>
 * @method void setPositions(array $Positions) 设置<p>位置信息</p>
 * @method string getLabel() 获取<p>命中标签</p>
 * @method void setLabel(string $Label) 设置<p>命中标签</p>
 */
class OcrHitInfo extends AbstractModel
{
    /**
     * @var string <p>标识模型命中还是关键词命中</p>
     */
    public $Type;

    /**
     * @var string <p>命中关键词</p>
     */
    public $Keyword;

    /**
     * @var string <p>自定义词库名称</p>
     */
    public $LibName;

    /**
     * @var array <p>位置信息</p>
     */
    public $Positions;

    /**
     * @var string <p>命中标签</p>
     */
    public $Label;

    /**
     * @param string $Type <p>标识模型命中还是关键词命中</p>
     * @param string $Keyword <p>命中关键词</p>
     * @param string $LibName <p>自定义词库名称</p>
     * @param array $Positions <p>位置信息</p>
     * @param string $Label <p>命中标签</p>
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
                $obj = new Positions();
                $obj->deserialize($value);
                array_push($this->Positions, $obj);
            }
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
