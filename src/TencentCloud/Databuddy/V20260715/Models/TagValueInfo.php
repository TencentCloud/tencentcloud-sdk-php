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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签值信息
 *
 * @method string getTagValueId() 获取标签值ID
 * @method void setTagValueId(string $TagValueId) 设置标签值ID
 * @method string getTagValue() 获取标签值内容，查询时填充，写入时不传
 * @method void setTagValue(string $TagValue) 设置标签值内容，查询时填充，写入时不传
 * @method integer getSource() 获取标签来源，参考 web_enum_standard.proto -> TagSource：0=未指定 1=用户直绑 2=用户组继承 3=两者都有，查询时填充，写入时不传
 * @method void setSource(integer $Source) 设置标签来源，参考 web_enum_standard.proto -> TagSource：0=未指定 1=用户直绑 2=用户组继承 3=两者都有，查询时填充，写入时不传
 * @method array getGroupNames() 获取继承来源的用户组名称列表，Source=1 时为空，查询时填充，写入时不传
 * @method void setGroupNames(array $GroupNames) 设置继承来源的用户组名称列表，Source=1 时为空，查询时填充，写入时不传
 */
class TagValueInfo extends AbstractModel
{
    /**
     * @var string 标签值ID
     */
    public $TagValueId;

    /**
     * @var string 标签值内容，查询时填充，写入时不传
     */
    public $TagValue;

    /**
     * @var integer 标签来源，参考 web_enum_standard.proto -> TagSource：0=未指定 1=用户直绑 2=用户组继承 3=两者都有，查询时填充，写入时不传
     */
    public $Source;

    /**
     * @var array 继承来源的用户组名称列表，Source=1 时为空，查询时填充，写入时不传
     */
    public $GroupNames;

    /**
     * @param string $TagValueId 标签值ID
     * @param string $TagValue 标签值内容，查询时填充，写入时不传
     * @param integer $Source 标签来源，参考 web_enum_standard.proto -> TagSource：0=未指定 1=用户直绑 2=用户组继承 3=两者都有，查询时填充，写入时不传
     * @param array $GroupNames 继承来源的用户组名称列表，Source=1 时为空，查询时填充，写入时不传
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
        if (array_key_exists("TagValueId",$param) and $param["TagValueId"] !== null) {
            $this->TagValueId = $param["TagValueId"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("GroupNames",$param) and $param["GroupNames"] !== null) {
            $this->GroupNames = $param["GroupNames"];
        }
    }
}
