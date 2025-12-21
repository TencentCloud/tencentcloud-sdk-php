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
 * AddCasterInputInfo请求参数结构体
 *
 * @method integer getCasterId() 获取<p>导播台ID。</p>
 * @method void setCasterId(integer $CasterId) 设置<p>导播台ID。</p>
 * @method CasterInputInfo getInputInfo() 获取<p>导播台输入源详细信息。</p>
 * @method void setInputInfo(CasterInputInfo $InputInfo) 设置<p>导播台输入源详细信息。</p>
 */
class AddCasterInputInfoRequest extends AbstractModel
{
    /**
     * @var integer <p>导播台ID。</p>
     */
    public $CasterId;

    /**
     * @var CasterInputInfo <p>导播台输入源详细信息。</p>
     */
    public $InputInfo;

    /**
     * @param integer $CasterId <p>导播台ID。</p>
     * @param CasterInputInfo $InputInfo <p>导播台输入源详细信息。</p>
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
        if (array_key_exists("CasterId",$param) and $param["CasterId"] !== null) {
            $this->CasterId = $param["CasterId"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new CasterInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }
    }
}
