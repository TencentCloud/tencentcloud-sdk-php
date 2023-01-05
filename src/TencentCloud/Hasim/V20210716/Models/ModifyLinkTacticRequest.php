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
namespace TencentCloud\Hasim\V20210716\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLinkTactic请求参数结构体
 *
 * @method integer getLinkID() 获取云兔ID
 * @method void setLinkID(integer $LinkID) 设置云兔ID
 * @method integer getTacticID() 获取策略ID
 * @method void setTacticID(integer $TacticID) 设置策略ID
 */
class ModifyLinkTacticRequest extends AbstractModel
{
    /**
     * @var integer 云兔ID
     */
    public $LinkID;

    /**
     * @var integer 策略ID
     */
    public $TacticID;

    /**
     * @param integer $LinkID 云兔ID
     * @param integer $TacticID 策略ID
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
        if (array_key_exists("LinkID",$param) and $param["LinkID"] !== null) {
            $this->LinkID = $param["LinkID"];
        }

        if (array_key_exists("TacticID",$param) and $param["TacticID"] !== null) {
            $this->TacticID = $param["TacticID"];
        }
    }
}
