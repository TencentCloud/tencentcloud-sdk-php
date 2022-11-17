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
 * 标签
 *
 * @method integer getLabelId() 获取标签ID
 * @method void setLabelId(integer $LabelId) 设置标签ID
 * @method string getLabelName() 获取标签名称
 * @method void setLabelName(string $LabelName) 设置标签名称
 * @method integer getDidCount() 获取did数量
 * @method void setDidCount(integer $DidCount) 设置did数量
 * @method string getDid() 获取创建者did
 * @method void setDid(string $Did) 设置创建者did
 * @method string getClusterId() 获取网络ID
 * @method void setClusterId(string $ClusterId) 设置网络ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 */
class Label extends AbstractModel
{
    /**
     * @var integer 标签ID
     */
    public $LabelId;

    /**
     * @var string 标签名称
     */
    public $LabelName;

    /**
     * @var integer did数量
     */
    public $DidCount;

    /**
     * @var string 创建者did
     */
    public $Did;

    /**
     * @var string 网络ID
     */
    public $ClusterId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 群组ID
     */
    public $GroupId;

    /**
     * @param integer $LabelId 标签ID
     * @param string $LabelName 标签名称
     * @param integer $DidCount did数量
     * @param string $Did 创建者did
     * @param string $ClusterId 网络ID
     * @param string $CreateTime 创建时间
     * @param integer $GroupId 群组ID
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

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("DidCount",$param) and $param["DidCount"] !== null) {
            $this->DidCount = $param["DidCount"];
        }

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
