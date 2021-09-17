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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEKSContainerInstanceEvent请求参数结构体
 *
 * @method string getEksCiId() 获取容器实例id
 * @method void setEksCiId(string $EksCiId) 设置容器实例id
 * @method integer getLimit() 获取最大事件数量。默认为50，最大取值100。
 * @method void setLimit(integer $Limit) 设置最大事件数量。默认为50，最大取值100。
 */
class DescribeEKSContainerInstanceEventRequest extends AbstractModel
{
    /**
     * @var string 容器实例id
     */
    public $EksCiId;

    /**
     * @var integer 最大事件数量。默认为50，最大取值100。
     */
    public $Limit;

    /**
     * @param string $EksCiId 容器实例id
     * @param integer $Limit 最大事件数量。默认为50，最大取值100。
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
        if (array_key_exists("EksCiId",$param) and $param["EksCiId"] !== null) {
            $this->EksCiId = $param["EksCiId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
