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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒资过滤条件


 *
 * @method array getMediaNameSet() 获取媒资名称过滤条件
 * @method void setMediaNameSet(array $MediaNameSet) 设置媒资名称过滤条件
 * @method array getStatusSet() 获取媒资状态数组，媒资状态可选值参见MediaInfo
 * @method void setStatusSet(array $StatusSet) 设置媒资状态数组，媒资状态可选值参见MediaInfo
 * @method array getMediaIdSet() 获取媒资ID数组
 * @method void setMediaIdSet(array $MediaIdSet) 设置媒资ID数组
 * @method array getLabelSet() 获取媒资自定义标签数组
 * @method void setLabelSet(array $LabelSet) 设置媒资自定义标签数组
 * @method integer getMediaType() 获取媒资文件类型，定义参见[MediaPreknownInfo.MediaType](https://cloud.tencent.com/document/product/1509/65063#MediaPreknownInfo)
 * @method void setMediaType(integer $MediaType) 设置媒资文件类型，定义参见[MediaPreknownInfo.MediaType](https://cloud.tencent.com/document/product/1509/65063#MediaPreknownInfo)
 */
class MediaFilter extends AbstractModel
{
    /**
     * @var array 媒资名称过滤条件
     */
    public $MediaNameSet;

    /**
     * @var array 媒资状态数组，媒资状态可选值参见MediaInfo
     */
    public $StatusSet;

    /**
     * @var array 媒资ID数组
     */
    public $MediaIdSet;

    /**
     * @var array 媒资自定义标签数组
     */
    public $LabelSet;

    /**
     * @var integer 媒资文件类型，定义参见[MediaPreknownInfo.MediaType](https://cloud.tencent.com/document/product/1509/65063#MediaPreknownInfo)
     */
    public $MediaType;

    /**
     * @param array $MediaNameSet 媒资名称过滤条件
     * @param array $StatusSet 媒资状态数组，媒资状态可选值参见MediaInfo
     * @param array $MediaIdSet 媒资ID数组
     * @param array $LabelSet 媒资自定义标签数组
     * @param integer $MediaType 媒资文件类型，定义参见[MediaPreknownInfo.MediaType](https://cloud.tencent.com/document/product/1509/65063#MediaPreknownInfo)
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
        if (array_key_exists("MediaNameSet",$param) and $param["MediaNameSet"] !== null) {
            $this->MediaNameSet = $param["MediaNameSet"];
        }

        if (array_key_exists("StatusSet",$param) and $param["StatusSet"] !== null) {
            $this->StatusSet = $param["StatusSet"];
        }

        if (array_key_exists("MediaIdSet",$param) and $param["MediaIdSet"] !== null) {
            $this->MediaIdSet = $param["MediaIdSet"];
        }

        if (array_key_exists("LabelSet",$param) and $param["LabelSet"] !== null) {
            $this->LabelSet = $param["LabelSet"];
        }

        if (array_key_exists("MediaType",$param) and $param["MediaType"] !== null) {
            $this->MediaType = $param["MediaType"];
        }
    }
}
