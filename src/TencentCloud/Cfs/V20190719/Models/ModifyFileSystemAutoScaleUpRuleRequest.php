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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyFileSystemAutoScaleUpRule请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统id
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统id
 * @method integer getScaleUpThreshold() 获取扩容阈值，范围[10-90]
 * @method void setScaleUpThreshold(integer $ScaleUpThreshold) 设置扩容阈值，范围[10-90]
 * @method integer getTargetThreshold() 获取扩容后目标阈值,范围[10-90],该值要小于ScaleUpThreshold
 * @method void setTargetThreshold(integer $TargetThreshold) 设置扩容后目标阈值,范围[10-90],该值要小于ScaleUpThreshold
 * @method integer getStatus() 获取规则状态0:关闭，1 开启

 * @method void setStatus(integer $Status) 设置规则状态0:关闭，1 开启
 */
class ModifyFileSystemAutoScaleUpRuleRequest extends AbstractModel
{
    /**
     * @var string 文件系统id
     */
    public $FileSystemId;

    /**
     * @var integer 扩容阈值，范围[10-90]
     */
    public $ScaleUpThreshold;

    /**
     * @var integer 扩容后目标阈值,范围[10-90],该值要小于ScaleUpThreshold
     */
    public $TargetThreshold;

    /**
     * @var integer 规则状态0:关闭，1 开启

     */
    public $Status;

    /**
     * @param string $FileSystemId 文件系统id
     * @param integer $ScaleUpThreshold 扩容阈值，范围[10-90]
     * @param integer $TargetThreshold 扩容后目标阈值,范围[10-90],该值要小于ScaleUpThreshold
     * @param integer $Status 规则状态0:关闭，1 开启
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("ScaleUpThreshold",$param) and $param["ScaleUpThreshold"] !== null) {
            $this->ScaleUpThreshold = $param["ScaleUpThreshold"];
        }

        if (array_key_exists("TargetThreshold",$param) and $param["TargetThreshold"] !== null) {
            $this->TargetThreshold = $param["TargetThreshold"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
