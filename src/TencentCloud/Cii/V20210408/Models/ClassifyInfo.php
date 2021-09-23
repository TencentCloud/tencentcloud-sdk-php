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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 报告分类信息
 *
 * @method string getFirstClass() 获取一级分类
 * @method void setFirstClass(string $FirstClass) 设置一级分类
 * @method string getSecondClass() 获取二级分类
 * @method void setSecondClass(string $SecondClass) 设置二级分类
 * @method string getThirdClass() 获取三级分类
 * @method void setThirdClass(string $ThirdClass) 设置三级分类
 * @method integer getFirstClassId() 获取一级分类序号
 * @method void setFirstClassId(integer $FirstClassId) 设置一级分类序号
 * @method integer getSecondClassId() 获取二级分类序号
 * @method void setSecondClassId(integer $SecondClassId) 设置二级分类序号
 * @method integer getThirdClassId() 获取三级分类序号
 * @method void setThirdClassId(integer $ThirdClassId) 设置三级分类序号
 */
class ClassifyInfo extends AbstractModel
{
    /**
     * @var string 一级分类
     */
    public $FirstClass;

    /**
     * @var string 二级分类
     */
    public $SecondClass;

    /**
     * @var string 三级分类
     */
    public $ThirdClass;

    /**
     * @var integer 一级分类序号
     */
    public $FirstClassId;

    /**
     * @var integer 二级分类序号
     */
    public $SecondClassId;

    /**
     * @var integer 三级分类序号
     */
    public $ThirdClassId;

    /**
     * @param string $FirstClass 一级分类
     * @param string $SecondClass 二级分类
     * @param string $ThirdClass 三级分类
     * @param integer $FirstClassId 一级分类序号
     * @param integer $SecondClassId 二级分类序号
     * @param integer $ThirdClassId 三级分类序号
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
        if (array_key_exists("FirstClass",$param) and $param["FirstClass"] !== null) {
            $this->FirstClass = $param["FirstClass"];
        }

        if (array_key_exists("SecondClass",$param) and $param["SecondClass"] !== null) {
            $this->SecondClass = $param["SecondClass"];
        }

        if (array_key_exists("ThirdClass",$param) and $param["ThirdClass"] !== null) {
            $this->ThirdClass = $param["ThirdClass"];
        }

        if (array_key_exists("FirstClassId",$param) and $param["FirstClassId"] !== null) {
            $this->FirstClassId = $param["FirstClassId"];
        }

        if (array_key_exists("SecondClassId",$param) and $param["SecondClassId"] !== null) {
            $this->SecondClassId = $param["SecondClassId"];
        }

        if (array_key_exists("ThirdClassId",$param) and $param["ThirdClassId"] !== null) {
            $this->ThirdClassId = $param["ThirdClassId"];
        }
    }
}
