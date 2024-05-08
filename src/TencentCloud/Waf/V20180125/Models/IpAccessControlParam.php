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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP黑白名单参数结构体，主要用于IP黑白名单的导入。
 *
 * @method array getIpList() 获取IP列表
 * @method void setIpList(array $IpList) 设置IP列表
 * @method integer getValidTs() 获取valid_ts为有效日期，值为秒级时间戳（（如1680570420代表2023-04-04 09:07:00））
 * @method void setValidTs(integer $ValidTs) 设置valid_ts为有效日期，值为秒级时间戳（（如1680570420代表2023-04-04 09:07:00））
 * @method integer getActionType() 获取42为黑名单，40为白名单
 * @method void setActionType(integer $ActionType) 设置42为黑名单，40为白名单
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 */
class IpAccessControlParam extends AbstractModel
{
    /**
     * @var array IP列表
     */
    public $IpList;

    /**
     * @var integer valid_ts为有效日期，值为秒级时间戳（（如1680570420代表2023-04-04 09:07:00））
     */
    public $ValidTs;

    /**
     * @var integer 42为黑名单，40为白名单
     */
    public $ActionType;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @param array $IpList IP列表
     * @param integer $ValidTs valid_ts为有效日期，值为秒级时间戳（（如1680570420代表2023-04-04 09:07:00））
     * @param integer $ActionType 42为黑名单，40为白名单
     * @param string $Note 备注
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
        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("ValidTs",$param) and $param["ValidTs"] !== null) {
            $this->ValidTs = $param["ValidTs"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
