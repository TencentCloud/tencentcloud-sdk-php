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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddLabel请求参数结构体
 *
 * @method integer getLabelId() 获取标签ID
 * @method void setLabelId(integer $LabelId) 设置标签ID
 * @method string getDid() 获取tdid
 * @method void setDid(string $Did) 设置tdid
 */
class AddLabelRequest extends AbstractModel
{
    /**
     * @var integer 标签ID
     */
    public $LabelId;

    /**
     * @var string tdid
     */
    public $Did;

    /**
     * @param integer $LabelId 标签ID
     * @param string $Did tdid
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
        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }
    }
}
