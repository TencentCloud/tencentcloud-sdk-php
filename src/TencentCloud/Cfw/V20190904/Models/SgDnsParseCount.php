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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业安全组域名解析的IP统计
 *
 * @method integer getValidCount() 获取有效下发的IP个数，离散数据
 * @method void setValidCount(integer $ValidCount) 设置有效下发的IP个数，离散数据
 * @method integer getInvalidCount() 获取未下发的IP个数，离散数据
 * @method void setInvalidCount(integer $InvalidCount) 设置未下发的IP个数，离散数据
 */
class SgDnsParseCount extends AbstractModel
{
    /**
     * @var integer 有效下发的IP个数，离散数据
     */
    public $ValidCount;

    /**
     * @var integer 未下发的IP个数，离散数据
     */
    public $InvalidCount;

    /**
     * @param integer $ValidCount 有效下发的IP个数，离散数据
     * @param integer $InvalidCount 未下发的IP个数，离散数据
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
        if (array_key_exists("ValidCount",$param) and $param["ValidCount"] !== null) {
            $this->ValidCount = $param["ValidCount"];
        }

        if (array_key_exists("InvalidCount",$param) and $param["InvalidCount"] !== null) {
            $this->InvalidCount = $param["InvalidCount"];
        }
    }
}
