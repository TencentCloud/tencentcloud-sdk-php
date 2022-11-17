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
 * GetDeployList请求参数结构体
 *
 * @method string getClusterId() 获取网络ID
 * @method void setClusterId(string $ClusterId) 设置网络ID
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 * @method integer getDisplayStart() 获取起始位置
 * @method void setDisplayStart(integer $DisplayStart) 设置起始位置
 * @method integer getDisplayLength() 获取长度
 * @method void setDisplayLength(integer $DisplayLength) 设置长度
 */
class GetDeployListRequest extends AbstractModel
{
    /**
     * @var string 网络ID
     */
    public $ClusterId;

    /**
     * @var integer 群组ID
     */
    public $GroupId;

    /**
     * @var integer 起始位置
     */
    public $DisplayStart;

    /**
     * @var integer 长度
     */
    public $DisplayLength;

    /**
     * @param string $ClusterId 网络ID
     * @param integer $GroupId 群组ID
     * @param integer $DisplayStart 起始位置
     * @param integer $DisplayLength 长度
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("DisplayStart",$param) and $param["DisplayStart"] !== null) {
            $this->DisplayStart = $param["DisplayStart"];
        }

        if (array_key_exists("DisplayLength",$param) and $param["DisplayLength"] !== null) {
            $this->DisplayLength = $param["DisplayLength"];
        }
    }
}
