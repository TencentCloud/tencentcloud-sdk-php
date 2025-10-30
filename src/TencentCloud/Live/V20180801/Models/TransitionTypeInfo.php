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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转场信息
 *
 * @method string getTransitionType() 获取转场名称
 * @method void setTransitionType(string $TransitionType) 设置转场名称
 * @method string getSourceUrl() 获取素材url
 * @method void setSourceUrl(string $SourceUrl) 设置素材url
 * @method integer getIndex() 获取转场的下标，可用来排序，从1开始递增
 * @method void setIndex(integer $Index) 设置转场的下标，可用来排序，从1开始递增
 */
class TransitionTypeInfo extends AbstractModel
{
    /**
     * @var string 转场名称
     */
    public $TransitionType;

    /**
     * @var string 素材url
     */
    public $SourceUrl;

    /**
     * @var integer 转场的下标，可用来排序，从1开始递增
     */
    public $Index;

    /**
     * @param string $TransitionType 转场名称
     * @param string $SourceUrl 素材url
     * @param integer $Index 转场的下标，可用来排序，从1开始递增
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
        if (array_key_exists("TransitionType",$param) and $param["TransitionType"] !== null) {
            $this->TransitionType = $param["TransitionType"];
        }

        if (array_key_exists("SourceUrl",$param) and $param["SourceUrl"] !== null) {
            $this->SourceUrl = $param["SourceUrl"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
