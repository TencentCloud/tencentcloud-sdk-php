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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSpecs请求参数结构体
 *
 * @method integer getFullReplications() 获取<p>全能型副本数，当前支持范围：1-3，默认为3</p>
 * @method void setFullReplications(integer $FullReplications) 设置<p>全能型副本数，当前支持范围：1-3，默认为3</p>
 * @method integer getIsExclusiveInstance() 获取<p>独享实例</p>
 * @method void setIsExclusiveInstance(integer $IsExclusiveInstance) 设置<p>独享实例</p>
 */
class DescribeSpecsRequest extends AbstractModel
{
    /**
     * @var integer <p>全能型副本数，当前支持范围：1-3，默认为3</p>
     */
    public $FullReplications;

    /**
     * @var integer <p>独享实例</p>
     */
    public $IsExclusiveInstance;

    /**
     * @param integer $FullReplications <p>全能型副本数，当前支持范围：1-3，默认为3</p>
     * @param integer $IsExclusiveInstance <p>独享实例</p>
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
        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }

        if (array_key_exists("IsExclusiveInstance",$param) and $param["IsExclusiveInstance"] !== null) {
            $this->IsExclusiveInstance = $param["IsExclusiveInstance"];
        }
    }
}
