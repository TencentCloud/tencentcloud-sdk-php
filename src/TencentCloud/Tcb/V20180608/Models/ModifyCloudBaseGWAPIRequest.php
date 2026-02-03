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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCloudBaseGWAPI请求参数结构体
 *
 * @method string getServiceId() 获取Service ID
 * @method void setServiceId(string $ServiceId) 设置Service ID
 * @method string getAPIId() 获取API ID
 * @method void setAPIId(string $APIId) 设置API ID
 * @method array getOptions() 获取选项列表，key取值：domain, path。
 * @method void setOptions(array $Options) 设置选项列表，key取值：domain, path。
 */
class ModifyCloudBaseGWAPIRequest extends AbstractModel
{
    /**
     * @var string Service ID
     */
    public $ServiceId;

    /**
     * @var string API ID
     */
    public $APIId;

    /**
     * @var array 选项列表，key取值：domain, path。
     */
    public $Options;

    /**
     * @param string $ServiceId Service ID
     * @param string $APIId API ID
     * @param array $Options 选项列表，key取值：domain, path。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("APIId",$param) and $param["APIId"] !== null) {
            $this->APIId = $param["APIId"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = [];
            foreach ($param["Options"] as $key => $value){
                $obj = new CloudBaseOption();
                $obj->deserialize($value);
                array_push($this->Options, $obj);
            }
        }
    }
}
