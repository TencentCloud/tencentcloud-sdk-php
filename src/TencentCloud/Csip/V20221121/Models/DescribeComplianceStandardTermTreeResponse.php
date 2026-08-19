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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeComplianceStandardTermTree返回参数结构体
 *
 * @method integer getStandardID() 获取<p>合规规范ID</p>
 * @method void setStandardID(integer $StandardID) 设置<p>合规规范ID</p>
 * @method string getName() 获取<p>规范名称</p>
 * @method void setName(string $Name) 设置<p>规范名称</p>
 * @method array getChapters() 获取<p>条款章节</p>
 * @method void setChapters(array $Chapters) 设置<p>条款章节</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeComplianceStandardTermTreeResponse extends AbstractModel
{
    /**
     * @var integer <p>合规规范ID</p>
     */
    public $StandardID;

    /**
     * @var string <p>规范名称</p>
     */
    public $Name;

    /**
     * @var array <p>条款章节</p>
     */
    public $Chapters;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $StandardID <p>合规规范ID</p>
     * @param string $Name <p>规范名称</p>
     * @param array $Chapters <p>条款章节</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("StandardID",$param) and $param["StandardID"] !== null) {
            $this->StandardID = $param["StandardID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Chapters",$param) and $param["Chapters"] !== null) {
            $this->Chapters = [];
            foreach ($param["Chapters"] as $key => $value){
                $obj = new ComplianceChapterItem();
                $obj->deserialize($value);
                array_push($this->Chapters, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
