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
 * CopyCaster请求参数结构体
 *
 * @method integer getCasterId() 获取源导播台的ID
 * @method void setCasterId(integer $CasterId) 设置源导播台的ID
 * @method string getCasterName() 获取复制产生的新导播台名称
 * @method void setCasterName(string $CasterName) 设置复制产生的新导播台名称
 * @method string getOutputStreamId() 获取复制产生的导播台推送到云直播的流id
注意：该流id不能与云直播中的流id重复
 * @method void setOutputStreamId(string $OutputStreamId) 设置复制产生的导播台推送到云直播的流id
注意：该流id不能与云直播中的流id重复
 */
class CopyCasterRequest extends AbstractModel
{
    /**
     * @var integer 源导播台的ID
     */
    public $CasterId;

    /**
     * @var string 复制产生的新导播台名称
     */
    public $CasterName;

    /**
     * @var string 复制产生的导播台推送到云直播的流id
注意：该流id不能与云直播中的流id重复
     */
    public $OutputStreamId;

    /**
     * @param integer $CasterId 源导播台的ID
     * @param string $CasterName 复制产生的新导播台名称
     * @param string $OutputStreamId 复制产生的导播台推送到云直播的流id
注意：该流id不能与云直播中的流id重复
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

        if (array_key_exists("CasterName",$param) and $param["CasterName"] !== null) {
            $this->CasterName = $param["CasterName"];
        }

        if (array_key_exists("OutputStreamId",$param) and $param["OutputStreamId"] !== null) {
            $this->OutputStreamId = $param["OutputStreamId"];
        }
    }
}
